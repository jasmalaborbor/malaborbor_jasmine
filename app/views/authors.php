<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4f46e5;
            --secondary-color: #8b5cf6;
            --accent-color: #06d6a0;
            --accent-light: #40e0d0;
            --success-color: #10b981;
            --warning-color: #fbbf24;
            --danger-color: #f87171;
            --info-color: #3b82f6;
            --dark-bg: #0f172a;
            --dark-card: #1e293b;
            --light-bg: #f1f5f9;
            --white: #ffffff;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --gray-900: #0f172a;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--gray-700);
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            pointer-events: none;
            z-index: 0;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem 1rem;
            position: relative;
            z-index: 1;
        }

        /* Glassmorphism Cards */
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 0.98);
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(31, 38, 135, 0.4);
        }

        /* Header Section */
        .header-section {
            padding: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            opacity: 0.1;
            transform: translate(50%, -50%);
        }

        .page-title {
            color: var(--gray-900);
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-subtitle {
            color: var(--gray-600);
            font-size: 1.1rem;
            margin: 0.75rem 0 0 0;
            font-weight: 500;
        }

        .search-container {
            position: relative;
            max-width: 450px;
        }

        .search-input {
            border: 2px solid rgba(99, 102, 241, 0.2);
            border-radius: 15px;
            padding: 1rem 1.25rem 1rem 3.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            width: 100%;
            backdrop-filter: blur(10px);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            background: var(--white);
        }

        .search-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .search-btn {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 15px;
            padding: 1rem 2rem;
            color: var(--white);
            font-weight: 600;
            margin-left: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            position: relative;
            overflow: hidden;
        }

        .search-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .search-btn:hover::before {
            left: 100%;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        }

        /* Statistics Cards with New Layout */
        .stats-section {
            margin-bottom: 3rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .stat-card {
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
        }

        .stat-content {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            position: relative;
        }

        .stat-icon::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: xor;
        }

        .stat-icon.primary { 
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            color: var(--primary-color);
        }
        .stat-icon.success { 
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 214, 160, 0.1));
            color: var(--success-color);
        }
        .stat-icon.warning { 
            background: linear-gradient(135deg, rgba(251, 191, 36, 0.1), rgba(245, 158, 11, 0.1));
            color: var(--warning-color);
        }
        .stat-icon.info { 
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 197, 253, 0.1));
            color: var(--info-color);
        }

        .stat-info h3 {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--gray-900);
            margin: 0;
            line-height: 1;
        }

        .stat-info p {
            color: var(--gray-600);
            font-size: 1rem;
            margin: 0.5rem 0 0 0;
            font-weight: 500;
        }

        .stat-trend {
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .trend-up { color: var(--success-color); }
        .trend-down { color: var(--danger-color); }

        /* Main Table Card */
        .table-section {
            position: relative;
        }

        .table-card {
            border-radius: 20px;
            overflow: hidden;
        }

        .table-header {
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--gray-800) 100%);
            color: var(--white);
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .table-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            opacity: 0.1;
            transform: translate(30%, -30%);
        }

        .table-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            position: relative;
            z-index: 1;
        }

        .table-actions {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .action-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .action-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            color: var(--white);
            transform: translateY(-1px);
        }

        /* Custom Table */
        .custom-table {
            margin: 0;
            border: none;
            background: var(--white);
        }

        .custom-table thead th {
            background: linear-gradient(135deg, var(--gray-50), var(--gray-100));
            color: var(--gray-700);
            font-weight: 700;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 1.5rem;
            border: none;
            border-bottom: 2px solid var(--gray-200);
            position: relative;
        }

        .custom-table thead th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .custom-table thead th:hover::after {
            opacity: 1;
        }

        .custom-table tbody td {
            padding: 1.25rem 1.5rem;
            border: none;
            border-bottom: 1px solid var(--gray-100);
            vertical-align: middle;
            color: var(--gray-700);
            position: relative;
        }

        .custom-table tbody tr {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .custom-table tbody tr:hover {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.03), rgba(139, 92, 246, 0.03));
            transform: scale(1.002);
        }

        .custom-table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Table Cell Styles */
        .name-cell {
            font-weight: 700;
            color: var(--gray-900);
            position: relative;
        }

        .email-cell {
            color: var(--primary-color);
            font-weight: 600;
        }

        .date-cell {
            color: var(--gray-500);
            font-size: 0.9rem;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }

        .status-active {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        /* Table Footer */
        .table-footer {
            background: linear-gradient(135deg, var(--gray-50), var(--gray-100));
            padding: 2rem;
            border-top: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .pagination-info {
            color: var(--gray-600);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .footer-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .btn-export {
            background: linear-gradient(135deg, var(--white), var(--gray-50));
            border: 2px solid var(--gray-200);
            color: var(--gray-700);
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-export:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background: linear-gradient(135deg, var(--white), var(--gray-50));
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);
        }

        /* Quick Actions Floating Button */
        .quick-actions {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .fab-main {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: var(--white);
            font-size: 1.25rem;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fab-main:hover {
            transform: scale(1.1) rotate(90deg);
            box-shadow: 0 12px 35px rgba(99, 102, 241, 0.5);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                padding: 1rem;
            }

            .header-section {
                padding: 2rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .search-container {
                max-width: 100%;
                margin-top: 1rem;
            }

            .search-btn {
                margin-left: 0;
                margin-top: 1rem;
                width: 100%;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .table-footer {
                flex-direction: column;
                text-align: center;
            }

            .quick-actions {
                bottom: 1rem;
                right: 1rem;
            }
        }

        /* Loading Animation */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .loading {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Search Section -->
        <div class="header-section glass-card">
            <div class="row align-items-center">
                <div class="col-12">
                    <form action="<?= site_url('author'); ?>" method="get" class="d-flex justify-content-center">
                        <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
                        <div class="search-container">
                            <i class="fas fa-search search-icon"></i>
                            <input class="search-input" name="q" type="text" placeholder="Search students..." value="<?= html_escape($q); ?>">
                        </div>
                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Table Section -->
        <div class="table-section">
            <div class="table-card glass-card">
                <div class="table-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h3 class="table-title">
                                <i class="fas fa-users"></i>
                                Student Directory
                            </h3>
                            <div class="table-actions">
                                <a href="#" class="action-btn">
                                    <i class="fas fa-filter"></i>
                                    Filter
                                </a>
                                <a href="#" class="action-btn">
                                    <i class="fas fa-sort"></i>
                                    Sort
                                </a>
                                <a href="#" class="action-btn">
                                    <i class="fas fa-columns"></i>
                                    Columns
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th><i class="fas fa-user me-2"></i>First Name</th>
                                <th><i class="fas fa-user me-2"></i>Last Name</th>
                                <th><i class="fas fa-envelope me-2"></i>Email Address</th>
                                <th><i class="fas fa-birthday-cake me-2"></i>Date of Birth</th>
                                <th><i class="fas fa-calendar-alt me-2"></i>Registration</th>
                                <th><i class="fas fa-info-circle me-2"></i>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (html_escape($all) as $author): ?>
                                <tr>
                                    <td class="name-cell"><?= $author['first_name']; ?></td>
                                    <td class="name-cell"><?= $author['last_name']; ?></td>
                                    <td class="email-cell"><?= $author['email']; ?></td>
                                    <td class="date-cell"><?= $author['birthdate']; ?></td>
                                    <td class="date-cell"><?= $author['added']; ?></td>
                                    <td>
                                        <span class="status-badge status-active">
                                            <i class="fas fa-circle" style="font-size: 0.5rem;"></i>
                                            Active
                                        </span>
                                        <a href="<?= site_url('author/edit/' . $author['id']); ?>" class="btn btn-sm btn-warning ms-2">Edit</a>
                                        <a href="<?= site_url('author/delete/' . $author['id']); ?>" class="btn btn-sm btn-danger ms-2" onclick="return confirm('Are you sure you want to delete this author?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="table-footer">
                    <div class="pagination-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Showing 1-10 of 2,847 students
                    </div>
                    <div class="footer-actions">
                        <a href="#" class="btn-export">
                            <i class="fas fa-download"></i>
                            Export Data
                        </a>
                        <div class="pagination-wrapper">
                            <?= $page; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Floating Button -->
        <div class="quick-actions">
            <a href="<?= site_url('author/create'); ?>" class="fab-main" title="Add Author">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced search functionality
            const searchForm = document.querySelector('form');
            const searchBtn = document.querySelector('.search-btn');
            const searchInput = document.querySelector('.search-input');
            
            if (searchForm && searchBtn) {
                searchForm.addEventListener('submit', function() {
                    searchBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
                    searchBtn.classList.add('loading');
                });
            }
            
            // Enhanced table row interactions
            const tableRows = document.querySelectorAll('.custom-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('click', function(e) {
                    // Add ripple effect
                    const ripple = document.createElement('div');
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(99, 102, 241, 0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                        left: ${e.offsetX - 10}px;
                        top: ${e.offsetY - 10}px;
                        width: 20px;
                        height: 20px;
                    `;
                    
                    this.style.position = 'relative';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                    
                    console.log('Student row clicked with enhanced animation');
                });
            });
            
            // Floating action button animation
            const fab = document.querySelector('.fab-main');
            if (fab) {
                fab.addEventListener('click', function() {
                    this.style.transform = 'scale(1.1) rotate(135deg)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1) rotate(90deg)';
                    }, 150);
                });
            }
            
            // Add smooth scrolling
            document.documentElement.style.scrollBehavior = 'smooth';
            
            // Auto-focus search input with keyboard shortcut
            document.addEventListener('keydown', function(e) {
                if (e.ctrlKey && e.key === 'k') {
                    e.preventDefault();
                    searchInput?.focus();
                }
            });
        });
        
        // Add CSS animation for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>