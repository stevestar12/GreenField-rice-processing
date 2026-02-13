<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$admin_username = $_SESSION['admin_username'] ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | GreenField Rice Processing</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --rice-green: #2f5d2f;
            --dark-green: #1e401e;
            --light-green: #4a7c4a;
            --earth-brown: #8b5a2b;
            --golden-yellow: #d4af37;
            --cream: #f8f7f3;
            --pure-white: #ffffff;
            --off-white: #f5f5f0;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-dark: rgba(0, 0, 0, 0.15);
            --sidebar-width: 250px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--off-white);
            color: #333;
            line-height: 1.6;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--rice-green) 100%);
            color: var(--pure-white);
            padding: 1.5rem 0;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .sidebar-header {
            padding: 0 1.5rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
        }

        .admin-logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
        }

        .admin-logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--golden-yellow), #e6c158);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .admin-logo h2 {
            font-size: 1.2rem;
            font-weight: 700;
        }

        .admin-info {
            padding: 0.8rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            margin-top: 1rem;
        }

        .admin-name {
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .admin-role {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        .sidebar-nav {
            padding: 0 1rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.9rem 1rem;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-item:hover,
        .nav-item.active {
            background: rgba(255, 255, 255, 0.15);
            color: var(--pure-white);
            transform: translateX(5px);
        }

        .nav-item i {
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #eee;
        }

        .top-bar h1 {
            color: var(--dark-green);
            font-size: 1.8rem;
        }

        .logout-btn {
            background: linear-gradient(to right, #dc3545, #c82333);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
        }

        /* DASHBOARD CARDS */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .dashboard-card {
            background: var(--pure-white);
            border-radius: 12px;
            padding: 1.8rem;
            box-shadow: 0 5px 20px var(--shadow-light);
            transition: transform 0.3s ease;
            border-top: 4px solid var(--rice-green);
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px var(--shadow-dark);
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--rice-green);
        }

        .card-title {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .card-value {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 1rem;
        }

        .card-link {
            color: var(--rice-green);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-link:hover {
            text-decoration: underline;
        }

        /* QUICK ACTIONS */
        .quick-actions {
            background: var(--pure-white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 20px var(--shadow-light);
            margin-bottom: 2rem;
        }

        .quick-actions h2 {
            color: var(--dark-green);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .action-btn {
            background: var(--off-white);
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 1.2rem;
            text-align: center;
            text-decoration: none;
            color: #555;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.8rem;
        }

        .action-btn:hover {
            background: var(--rice-green);
            color: white;
            border-color: var(--rice-green);
            transform: translateY(-3px);
        }

        .action-icon {
            font-size: 1.8rem;
        }

        /* RECENT ACTIVITY */
        .recent-activity {
            background: var(--pure-white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 20px var(--shadow-light);
        }

        .activity-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .activity-header h2 {
            color: var(--dark-green);
            font-size: 1.5rem;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            background: var(--light-green);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .activity-content h4 {
            color: #333;
            margin-bottom: 0.2rem;
        }

        .activity-time {
            color: #888;
            font-size: 0.85rem;
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            :root {
                --sidebar-width: 220px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .mobile-menu-btn {
                display: block;
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 101;
                background: var(--rice-green);
                color: white;
                border: none;
                border-radius: 6px;
                padding: 0.7rem;
                font-size: 1.2rem;
                cursor: pointer;
            }
        }

        /* UTILITIES */
        .text-success { color: #28a745; }
        .text-warning { color: #ffc107; }
        .text-danger { color: #dc3545; }
        .text-info { color: #17a2b8; }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="admin-logo">
                <div class="admin-logo-icon">🌾</div>
                <h2>GreenField Admin</h2>
            </div>
            <div class="admin-info">
                <div class="admin-name"><?php echo htmlspecialchars($admin_username); ?></div>
                <div class="admin-role">System Administrator</div>
            </div>
        </div>
        
        <nav class="sidebar-nav">
            <a href="dashboard.php" class="nav-item active">
                <i>📊</i> Dashboard
            </a>
            <a href="manage_services.php" class="nav-item">
                <i>⚙️</i> Manage Services
            </a>
            <a href="manage_gallery.php" class="nav-item">
                <i>🖼️</i> Gallery Images
            </a>
            <a href="manage_orders.php" class="nav-item">
                <i>📦</i> Process Orders
            </a>
            <a href="#" class="nav-item">
                <i>👥</i> Manage Users
            </a>
            <a href="#" class="nav-item">
                <i>⚙️</i> Settings
            </a>
            <a href="logout.php" class="nav-item">
                <i>🚪</i> Logout
            </a>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="top-bar">
            <h1>Admin Dashboard</h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <!-- DASHBOARD STATS -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-icon">📊</div>
                <div class="card-title">Total Orders Today</div>
                <div class="card-value">24</div>
                <a href="manage_orders.php" class="card-link">View Orders →</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon">💰</div>
                <div class="card-title">Revenue Today</div>
                <div class="card-value">₦245,800</div>
                <a href="#" class="card-link">View Reports →</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon">👥</div>
                <div class="card-title">Active Farmers</div>
                <div class="card-value">156</div>
                <a href="#" class="card-link">Manage Users →</a>
            </div>
            
            <div class="dashboard-card">
                <div class="card-icon">✅</div>
                <div class="card-title">Completed Processing</div>
                <div class="card-value">89%</div>
                <a href="manage_orders.php" class="card-link">View Status →</a>
            </div>
        </div>

        <!-- QUICK ACTIONS -->
        <div class="quick-actions">
            <h2>Quick Actions</h2>
            <div class="action-grid">
                <a href="manage_services.php" class="action-btn">
                    <div class="action-icon">➕</div>
                    <span>Add New Service</span>
                </a>
                <a href="manage_gallery.php" class="action-btn">
                    <div class="action-icon">🖼️</div>
                    <span>Upload Gallery Image</span>
                </a>
                <a href="manage_orders.php" class="action-btn">
                    <div class="action-icon">📝</div>
                    <span>Create New Order</span>
                </a>
                <a href="#" class="action-btn">
                    <div class="action-icon">📧</div>
                    <span>Send Notification</span>
                </a>
            </div>
        </div>

        <!-- RECENT ACTIVITY -->
        <div class="recent-activity">
            <div class="activity-header">
                <h2>Recent Activity</h2>
                <a href="#" style="color: var(--rice-green); text-decoration: none; font-size: 0.9rem;">View All →</a>
            </div>
            <ul class="activity-list">
                <li class="activity-item">
                    <div class="activity-icon">📦</div>
                    <div class="activity-content">
                        <h4>New processing order received</h4>
                        <div class="activity-time">5 minutes ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">✅</div>
                    <div class="activity-content">
                        <h4>Order #GF-2024-045 completed</h4>
                        <div class="activity-time">1 hour ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">👤</div>
                    <div class="activity-content">
                        <h4>New farmer registration</h4>
                        <div class="activity-time">2 hours ago</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">🖼️</div>
                    <div class="activity-content">
                        <h4>Gallery image uploaded</h4>
                        <div class="activity-time">Yesterday, 3:45 PM</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            if(window.innerWidth <= 768) {
                const sidebar = document.querySelector('.sidebar');
                const menuBtn = document.createElement('button');
                menuBtn.className = 'mobile-menu-btn';
                menuBtn.innerHTML = '☰';
                document.body.appendChild(menuBtn);
                
                menuBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('active');
                });
            }
        });
    </script>
</body>
</html>