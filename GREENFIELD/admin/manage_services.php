<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$admin_username = $_SESSION['admin_username'] ?? 'Admin';

// Sample services data (in production, this would come from database)
$services = [
    ['id' => 1, 'name' => 'Rice Milling', 'description' => 'Efficient milling services', 'status' => 'active', 'icon' => '🌾'],
    ['id' => 2, 'name' => 'Rice Threshing', 'description' => 'Modern threshing methods', 'status' => 'active', 'icon' => '⚙️'],
    ['id' => 3, 'name' => 'Bulk Processing', 'description' => 'Large-scale processing', 'status' => 'active', 'icon' => '📦'],
    ['id' => 4, 'name' => 'Quality Testing', 'description' => 'Comprehensive quality testing', 'status' => 'inactive', 'icon' => '🔬'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services | GreenField Admin</title>
    <style>
        /* Include all CSS from dashboard.php, then add these: */
        
        .manage-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #eee;
        }

        .page-title {
            color: var(--dark-green);
            font-size: 1.8rem;
        }

        .add-btn {
            background: linear-gradient(to right, var(--rice-green), var(--light-green));
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(47, 93, 47, 0.3);
        }

        .services-table {
            background: var(--pure-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px var(--shadow-light);
        }

        .table-header {
            display: grid;
            grid-template-columns: 50px 2fr 3fr 100px 150px;
            padding: 1rem 1.5rem;
            background: var(--off-white);
            font-weight: 600;
            color: var(--dark-green);
            border-bottom: 2px solid #eee;
        }

        .table-row {
            display: grid;
            grid-template-columns: 50px 2fr 3fr 100px 150px;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .table-row:hover {
            background: rgba(47, 93, 47, 0.03);
        }

        .service-icon {
            font-size: 1.5rem;
        }

        .status-badge {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-active {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
        }

        .status-inactive {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-edit, .btn-delete {
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-edit {
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
            border: 1px solid rgba(0, 123, 255, 0.2);
        }

        .btn-delete {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .btn-edit:hover {
            background: #007bff;
            color: white;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: white;
        }

        @media (max-width: 768px) {
            .table-header, .table-row {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <div class="manage-header">
            <h1 class="page-title">Manage Services</h1>
            <a href="#" class="add-btn">+ Add New Service</a>
        </div>

        <div class="services-table">
            <div class="table-header">
                <div>Icon</div>
                <div>Service Name</div>
                <div>Description</div>
                <div>Status</div>
                <div>Actions</div>
            </div>

            <?php foreach($services as $service): ?>
            <div class="table-row">
                <div class="service-icon"><?php echo htmlspecialchars($service['icon']); ?></div>
                <div style="font-weight: 600;"><?php echo htmlspecialchars($service['name']); ?></div>
                <div><?php echo htmlspecialchars($service['description']); ?></div>
                <div>
                    <span class="status-badge status-<?php echo $service['status']; ?>">
                        <?php echo ucfirst($service['status']); ?>
                    </span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn-edit">Edit</a>
                    <a href="#" class="btn-delete">Delete</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>