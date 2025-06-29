<?php
session_start();
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Dashboard</title>
    <style>
    .pagination .page-link {
        background-color: red;
        color: black;
        border: 1px solid black;
    }
    .pagination .active .page-link {
        background-color: darkred; /* Optional: Highlight active page */
        color: white; /* Optional: White text for active */
    }
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 bg-light vh-100 p-3">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="user_list.php">User List</a></li>
                <li class="nav-item"><a class="nav-link" href="add_products.php">Add Products</a></li>
                <li class="nav-item"><a class="nav-link" href="product_list.php">Product List</a></li>
                <li class="nav-item" style="position: fixed; bottom: 0; width:4%; text-align: center;">
                    <a class="nav-link btn btn-danger text-white" href="logout.php" style="margin-top: 20px;">Exit</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">
            <h1>Dashboard</h1>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card text-center" onclick="filterOrders('all')" style="cursor: pointer;">
                        <div class="card-body">
                            <h5>Total Orders</h5>
                            <p><?= $totalOrders ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" onclick="filterOrders('pending')" style="cursor: pointer;">
                        <div class="card-body">
                            <h5>Pending Orders</h5>
                            <p><?= $pendingOrders ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" onclick="filterOrders('completed')" style="cursor: pointer;">
                        <div class="card-body">
                            <h5>Completed Orders</h5>
                            <p><?= $completedOrders ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" onclick="filterOrders('canceled')" style="cursor: pointer;">
                        <div class="card-body">
                            <h5>Total Sales</h5>
                            <p>₹<?= $totalSales ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <h2>Orders</h2>
            <table class="table table-bordered" id="orders-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Username</th>
                        <th>Product Name</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order): ?>
                        <tr data-status="<?= esc($order['status']) ?>">
                            <td><?= esc($order['id']) ?></td>
                            <td><?= esc($order['username'] ?? 'Unknown') ?></td>
                            <td><?= esc($order['productName']) ?></td>
                            <td>₹<?= esc($order['total_price']) ?></td>
                            <td>
                                <select class="form-select" id="status-<?= esc($order['id']) ?>" onchange="updateOrderStatus(<?= esc($order['id']) ?>)">
                                    <option value="completed" <?= $order['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                                    <option value="pending" <?= $order['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="canceled" <?= $order['status'] === 'canceled' ? 'selected' : '' ?>>Canceled</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-danger" onclick="updateOrderStatus(<?= esc($order['id']) ?>)">Update</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-center" id="pagination"></ul>
            </nav>
        </div>
    </div>
</div>

<script>
function updateOrderStatus(orderId) {
    const status = document.getElementById('status-' + orderId).value;

    fetch('<?= base_url('dashboard.php/update-order-status') ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({
            id: orderId,
            status: status
        })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.status === 'success') {
            location.reload();
        }
    })
    .catch(error => console.error('Error:', error));
}

function filterOrders(status) {
    const rows = document.querySelectorAll('#orders-table tbody tr');
    rows.forEach(row => {
        if (status === 'all' || row.getAttribute('data-status') === status) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
    paginate();
}

function paginate() {
    const rows = Array.from(document.querySelectorAll('#orders-table tbody tr')).filter(row => row.style.display !== 'none');
    const rowsPerPage = 5;
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    const totalPages = Math.ceil(rows.length / rowsPerPage);
    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= start && index < end ? '' : 'none';
        });

        currentPage = page; // Update currentPage after showing rows
    }

    function createPageItem(page) {
        const li = document.createElement('li');
        li.classList.add('page-item');
        if (page === currentPage) li.classList.add('active');
        const a = document.createElement('a');
        a.classList.add('page-link');
        a.style.backgroundColor = 'red'; // Red background
        a.style.color = 'white';        // Black text
        a.style.border = '1px solid white'; // Optional border
        a.textContent = page;
        a.href = '#';
        a.onclick = (e) => {
            e.preventDefault();
            showPage(page); // Update rows based on the page clicked
            paginate(); // Rebuild pagination for the new current page
        };
        li.appendChild(a);
        pagination.appendChild(li);
    }

    // Page Number Buttons
    for (let i = 1; i <= totalPages; i++) {
        createPageItem(i);
    }

    showPage(currentPage);
}

// Initialize pagination when the page is loaded
document.addEventListener('DOMContentLoaded', paginate);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
