<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboardAdmin.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h1 class="sidebar-title">Admin</h1>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Analytics</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="#"><i class="fas fa-question-circle"></i> Support</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <h3>Bookings</h3>
                    <p>120</p>
                </div>
                <div class="stat-card">
                    <h3>Users</h3>
                    <p>15</p>
                </div>
                <div class="stat-card">
                    <h3>Revenue</h3>
                    <p>$2,300</p>
                </div>
            </div>

            <!-- Recent Bookings Section -->
            <section class="content-section">
                <h2>Recent Bookings</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>User List</th>
                                <th>Email</th>
                                <th>Status <i class="fas fa-caret-down"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td><span class="status active">Active</span></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td><span class="status active">Active</span></td>
                            </tr>
                            <tr>
                                <td>Robert Johnson</td>
                                <td>robert@example.com</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- User List Section -->
            <section class="content-section">
                <h2>User List</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Member <i class="fas fa-caret-down"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>john@example.com</td>
                                <td><span class="badge member">Premium</span></td>
                            </tr>
                            <tr>
                                <td>jane@example.com</td>
                                <td><span class="badge member">Standard</span></td>
                            </tr>
                            <tr>
                                <td>robert@example.com</td>
                                <td><span class="badge non-member">Trial</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>