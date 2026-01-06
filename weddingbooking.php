<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner Pro - Complete System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===== CSS RESET & VARIABLES ===== */
        :root {
            --primary: #9b59b6;
            --primary-light: #e8d0f1;
            --primary-dark: #8e44ad;
            --secondary: #ff6b8b;
            --accent: #ffd166;
            --success: #2ecc71;
            --text: #333333;
            --text-light: #666666;
            --light: #ffffff;
            --bg-light: #f9f0ff;
            --radius: 25px;
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f9f0ff 0%, #ffffff 100%);
            color: var(--text);
            min-height: 100vh;
        }

        /* ===== UTILITY CLASSES ===== */
        .hidden {
            display: none !important;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary);
            font-size: 2.5rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: var(--radius);
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(155, 89, 182, 0.4);
        }

        .btn-secondary {
            background: var(--secondary);
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* ===== NAVIGATION ===== */
        .navbar {
            background: var(--light);
            padding: 1.5rem 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo h1 {
            color: var(--primary);
            font-size: 1.8rem;
        }

        .logo-icon {
            font-size: 2rem;
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a.active {
            color: var(--primary);
            font-weight: 600;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            padding: 5rem 0;
            text-align: center;
            background: linear-gradient(rgba(155, 89, 182, 0.9), rgba(155, 89, 182, 0.7));
            color: white;
            border-radius: 0 0 var(--radius) var(--radius);
            margin-bottom: 3rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeIn 1s ease;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        /* ===== BUDGET CALCULATOR ===== */
        .budget-calculator {
            background: white;
            padding: 2.5rem;
            border-radius: var(--radius);
            max-width: 800px;
            margin: 2rem auto;
            box-shadow: var(--shadow);
        }

        .budget-input-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .budget-input {
            flex: 1;
            padding: 1rem;
            border: 2px solid var(--primary-light);
            border-radius: var(--radius);
            font-size: 1.2rem;
            outline: none;
            transition: var(--transition);
        }

        .budget-input:focus {
            border-color: var(--primary);
        }

        .budget-results {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 2rem;
        }

        .budget-item {
            background: var(--primary-light);
            padding: 1.5rem;
            border-radius: 20px;
            text-align: center;
        }

        .budget-item h4 {
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .budget-amount {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text);
        }

        .recommended-packages {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 2px solid var(--primary-light);
        }

        /* ===== FILTER SECTION ===== */
        .filter-section {
            display: flex;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .filter-sidebar {
            flex: 0 0 300px;
            background: white;
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .filter-group {
            margin-bottom: 1.5rem;
        }

        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .filter-group input, .filter-group select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            transition: var(--transition);
        }

        .filter-group input:focus, .filter-group select:focus {
            border-color: var(--primary);
            outline: none;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .price-range input {
            flex: 1;
        }

        /* ===== VENUE CARDS ===== */
        .venue-grid {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        .venue-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            cursor: pointer;
        }

        .venue-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .venue-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .venue-content {
            padding: 1.5rem;
        }

        .venue-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .venue-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text);
        }

        .venue-price {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 700;
        }

        .venue-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .venue-rating {
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .venue-capacity {
            background: var(--primary-light);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .venue-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .wishlist-btn {
            background: none;
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .wishlist-btn:hover, .wishlist-btn.active {
            background: var(--primary);
            color: white;
        }

        /* ===== BOOKING MODAL ===== */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            padding: 20px;
        }

        .modal {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-header h2 {
            color: var(--primary);
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            transition: var(--transition);
        }

        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: var(--primary);
            outline: none;
        }

        /* ===== ADMIN DASHBOARD ===== */
        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .admin-sidebar {
            width: 250px;
            background: linear-gradient(180deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 2rem 0;
            position: fixed;
            height: 100vh;
        }

        .admin-sidebar h2 {
            padding: 0 1.5rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .admin-sidebar nav {
            display: flex;
            flex-direction: column;
        }

        .admin-sidebar a {
            color: white;
            text-decoration: none;
            padding: 1rem 1.5rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .admin-sidebar a:hover {
            background: rgba(255,255,255,0.1);
        }

        .admin-sidebar a.active {
            background: rgba(255,255,255,0.2);
            border-left: 4px solid var(--accent);
        }

        .admin-main {
            flex: 1;
            margin-left: 250px;
            padding: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0.5rem 0;
        }

        .data-table {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-top: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: var(--primary-light);
            color: var(--primary-dark);
            font-weight: 600;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .status-badge {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-confirmed {
            background: #d4edda;
            color: #155724;
        }

        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }

        /* ===== WISHLIST PAGE ===== */
        .wishlist-container {
            padding: 2rem 0;
        }

        .empty-wishlist {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-light);
        }

        .empty-wishlist i {
            font-size: 4rem;
            color: var(--primary-light);
            margin-bottom: 1rem;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 3rem 0;
            margin-top: 5rem;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 1024px) {
            .filter-section {
                flex-direction: column;
            }
            
            .filter-sidebar {
                position: static;
                width: 100%;
            }
            
            .admin-container {
                flex-direction: column;
            }
            
            .admin-sidebar {
                position: static;
                width: 100%;
                height: auto;
            }
            
            .admin-main {
                margin-left: 0;
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .budget-results {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .venue-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
        }

        @media (max-width: 480px) {
            .budget-results {
                grid-template-columns: 1fr;
            }
            
            .budget-input-group {
                flex-direction: column;
            }
            
            .modal {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">💒</div>
                <h1>WeddingPlanner Pro</h1>
            </div>
            <div class="nav-links">
                <a href="#" onclick="showSection('home')" class="active" id="home-link">Home</a>
                <a href="#" onclick="showSection('venues')" id="venues-link">Venues</a>
                <a href="#" onclick="showSection('budget')" id="budget-link">Budget Calculator</a>
                <a href="#" onclick="showSection('wishlist')" id="wishlist-link">Wishlist <span id="wishlist-count">(0)</span></a>
                <a href="#" onclick="showSection('admin')" id="admin-link">Admin</a>
                <div class="user-info">
                    <div class="avatar">CG</div>
                    <span>Cesar Guiritan</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home-section" class="section">
        <div class="hero">
            <div class="container">
                <h1>Plan Your Dream Wedding</h1>
                <p>Find perfect venues, manage your budget, and book everything in one place. Start by setting your budget below.</p>
                <a href="#" onclick="showSection('budget')" class="btn btn-primary">Start Planning <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="container">
            <h2 class="section-title">Featured Venues</h2>
            <div class="venue-grid" id="featured-venues">
                <!-- Featured venues will be loaded here -->
            </div>
        </div>
    </section>

    <!-- Venues Section -->
    <section id="venues-section" class="section hidden">
        <div class="container">
            <h2 class="section-title">Browse Wedding Venues</h2>
            
            <div class="filter-section">
                <div class="filter-sidebar">
                    <h3>Filter Venues</h3>
                    
                    <div class="filter-group">
                        <label>Price Range (₱)</label>
                        <div class="price-range">
                            <input type="range" id="priceFilter" min="0" max="1000000" step="10000" value="1000000">
                            <span id="priceValue">₱0 - ₱1,000,000</span>
                        </div>
                    </div>
                    
                    <div class="filter-group">
                        <label>Location</label>
                        <select id="locationFilter">
                            <option value="">All Locations</option>
                            <option value="Manila">Manila</option>
                            <option value="Cebu">Cebu</option>
                            <option value="Davao">Davao</option>
                            <option value="Tagaytay">Tagaytay</option>
                            <option value="Batangas">Batangas</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Minimum Rating</label>
                        <select id="ratingFilter">
                            <option value="0">Any Rating</option>
                            <option value="4">⭐ 4.0+</option>
                            <option value="4.5">⭐ 4.5+</option>
                            <option value="5">⭐ 5.0</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Minimum Capacity</label>
                        <input type="number" id="capacityFilter" placeholder="e.g., 100">
                    </div>
                    
                    <button class="btn btn-primary" style="width: 100%;" onclick="applyFilters()">
                        <i class="fas fa-filter"></i> Apply Filters
                    </button>
                    
                    <button class="btn btn-outline" style="width: 100%; margin-top: 0.5rem;" onclick="resetFilters()">
                        <i class="fas fa-redo"></i> Reset Filters
                    </button>
                </div>
                
                <div class="venue-grid" id="venues-container">
                    <!-- Venues will be loaded here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Budget Calculator Section -->
    <section id="budget-section" class="section hidden">
        <div class="container">
            <h2 class="section-title">Wedding Budget Calculator</h2>
            
            <div class="budget-calculator">
                <h3>Enter your total wedding budget</h3>
                <p>Our system will automatically calculate recommended allocations for each category.</p>
                
                <div class="budget-input-group">
                    <input type="number" id="totalBudget" class="budget-input" placeholder="e.g., 500000" value="500000">
                    <button class="btn btn-primary" onclick="calculateBudget()">
                        <i class="fas fa-calculator"></i> Calculate
                    </button>
                </div>
                
                <div id="budget-results-container" class="hidden">
                    <h4>Recommended Allocation for <span id="budget-amount">₱500,000</span></h4>
                    
                    <div class="budget-results">
                        <div class="budget-item">
                            <h4>Venue</h4>
                            <div class="budget-amount" id="venue-budget">₱200,000</div>
                            <small>40% of budget</small>
                        </div>
                        <div class="budget-item">
                            <h4>Catering</h4>
                            <div class="budget-amount" id="catering-budget">₱150,000</div>
                            <small>30% of budget</small>
                        </div>
                        <div class="budget-item">
                            <h4>Decoration</h4>
                            <div class="budget-amount" id="decoration-budget">₱100,000</div>
                            <small>20% of budget</small>
                        </div>
                        <div class="budget-item">
                            <h4>Miscellaneous</h4>
                            <div class="budget-amount" id="misc-budget">₱50,000</div>
                            <small>10% of budget</small>
                        </div>
                    </div>
                    
                    <div class="recommended-packages">
                        <h4>Recommended Packages for your budget</h4>
                        <div class="venue-grid" id="recommended-packages">
                            <!-- Recommended packages will appear here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wishlist Section -->
    <section id="wishlist-section" class="section hidden">
        <div class="container wishlist-container">
            <h2 class="section-title">Your Wishlist</h2>
            
            <div id="wishlist-empty" class="empty-wishlist hidden">
                <i class="fas fa-heart"></i>
                <h3>Your wishlist is empty</h3>
                <p>Save venues you like by clicking the heart icon</p>
                <a href="#" onclick="showSection('venues')" class="btn btn-primary">Browse Venues</a>
            </div>
            
            <div class="venue-grid" id="wishlist-container">
                <!-- Wishlist items will be loaded here -->
            </div>
        </div>
    </section>

    <!-- Admin Dashboard Section -->
    <section id="admin-section" class="section hidden">
        <div class="admin-container">
            <div class="admin-sidebar">
                <h2><i class="fas fa-crown"></i> Admin Panel</h2>
                <nav>
                    <a href="#" onclick="showAdminTab('dashboard')" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="#" onclick="showAdminTab('venues')"><i class="fas fa-building"></i> Manage Venues</a>
                    <a href="#" onclick="showAdminTab('bookings')"><i class="fas fa-calendar-check"></i> Bookings</a>
                    <a href="#" onclick="showAdminTab('users')"><i class="fas fa-users"></i> Users</a>
                    <a href="#" onclick="showSection('home')"><i class="fas fa-home"></i> View Site</a>
                </nav>
            </div>
            
            <div class="admin-main">
                <!-- Dashboard Tab -->
                <div id="admin-dashboard" class="admin-tab">
                    <h1>Admin Dashboard</h1>
                    <p>Welcome back, Administrator. Here's an overview of your system.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-card">
                            <h3>Total Bookings</h3>
                            <div class="stat-number" id="total-bookings">24</div>
                            <small>This month: 5 bookings</small>
                        </div>
                        <div class="stat-card">
                            <h3>Pending Approvals</h3>
                            <div class="stat-number" id="pending-bookings">3</div>
                            <small>Require attention</small>
                        </div>
                        <div class="stat-card">
                            <h3>Total Venues</h3>
                            <div class="stat-number" id="total-venues">12</div>
                            <small>Available for booking</small>
                        </div>
                        <div class="stat-card">
                            <h3>Total Revenue</h3>
                            <div class="stat-number" id="total-revenue">₱2.4M</div>
                            <small>Year to date</small>
                        </div>
                    </div>
                    
                    <h2>Recent Bookings</h2>
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="recent-bookings">
                                <!-- Bookings will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Manage Venues Tab -->
                <div id="admin-venues" class="admin-tab hidden">
                    <h1>Manage Venues</h1>
                    <button class="btn btn-primary" onclick="showAddVenueModal()">
                        <i class="fas fa-plus"></i> Add New Venue
                    </button>
                    
                    <div class="data-table" style="margin-top: 2rem;">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Venue Name</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Capacity</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="admin-venues-list">
                                <!-- Venues will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Bookings Tab -->
                <div id="admin-bookings" class="admin-tab hidden">
                    <h1>Manage Bookings</h1>
                    
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Venue</th>
                                    <th>Event Date</th>
                                    <th>Guests</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="all-bookings">
                                <!-- All bookings will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Users Tab -->
                <div id="admin-users" class="admin-tab hidden">
                    <h1>Manage Users</h1>
                    
                    <div class="data-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Joined</th>
                                    <th>Bookings</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="users-list">
                                <!-- Users will be loaded here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div id="booking-modal" class="modal-overlay hidden">
        <div class="modal">
            <div class="modal-header">
                <h2>Book This Venue</h2>
                <button class="close-btn" onclick="closeBookingModal()">&times;</button>
            </div>
            
            <form id="booking-form">
                <div class="form-group">
                    <label for="booking-venue">Venue</label>
                    <input type="text" id="booking-venue" readonly>
                </div>
                
                <div class="form-group">
                    <label for="booking-date">Event Date</label>
                    <input type="date" id="booking-date" required>
                </div>
                
                <div class="form-group">
                    <label for="guest-count">Number of Guests</label>
                    <input type="number" id="guest-count" min="10" max="1000" required>
                </div>
                
                <div class="form-group">
                    <label for="special-requests">Special Requests</label>
                    <textarea id="special-requests" rows="4" placeholder="Any special requirements or notes..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="total-price">Estimated Total</label>
                    <input type="text" id="total-price" readonly>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    <i class="fas fa-check"></i> Submit Booking Request
                </button>
            </form>
        </div>
    </div>

    <!-- Add Venue Modal -->
    <div id="add-venue-modal" class="modal-overlay hidden">
        <div class="modal">
            <div class="modal-header">
                <h2>Add New Venue</h2>
                <button class="close-btn" onclick="closeAddVenueModal()">&times;</button>
            </div>
            
            <form id="add-venue-form">
                <div class="form-group">
                    <label for="venue-name">Venue Name</label>
                    <input type="text" id="venue-name" required>
                </div>
                
                <div class="form-group">
                    <label for="venue-location">Location</label>
                    <select id="venue-location" required>
                        <option value="">Select Location</option>
                        <option value="Manila">Manila</option>
                        <option value="Cebu">Cebu</option>
                        <option value="Davao">Davao</option>
                        <option value="Tagaytay">Tagaytay</option>
                        <option value="Batangas">Batangas</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="venue-price">Price (₱)</label>
                    <input type="number" id="venue-price" required>
                </div>
                
                <div class="form-group">
                    <label for="venue-capacity">Capacity</label>
                    <input type="number" id="venue-capacity" required>
                </div>
                
                <div class="form-group">
                    <label for="venue-rating">Rating (1-5)</label>
                    <input type="number" id="venue-rating" min="1" max="5" step="0.1" required>
                </div>
                
                <div class="form-group">
                    <label for="venue-description">Description</label>
                    <textarea id="venue-description" rows="4" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="venue-image">Image URL</label>
                    <input type="text" id="venue-image" placeholder="https://example.com/image.jpg">
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    <i class="fas fa-plus"></i> Add Venue
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <h3>Wedding Planner Pro</h3>
            <p>Your complete wedding planning solution</p>
            
            <div class="footer-links">
                <a href="#" onclick="showSection('home')">Home</a>
                <a href="#" onclick="showSection('venues')">Venues</a>
                <a href="#" onclick="showSection('budget')">Budget Calculator</a>
                <a href="#" onclick="showSection('admin')">Admin</a>
            </div>
            
            <p>&copy; 2025 Wedding Planner Pro. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // ===== GLOBAL VARIABLES =====
        let currentVenueId = null;
        let wishlist = JSON.parse(localStorage.getItem('wedding_wishlist')) || [];
        let bookings = JSON.parse(localStorage.getItem('wedding_bookings')) || [];
        let venues = [
            {
                id: 1,
                name: "Grand Manila Hotel",
                location: "Manila",
                price: 250000,
                capacity: 300,
                rating: 4.8,
                description: "Luxurious hotel with elegant ballroom and garden views.",
                image: "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                featured: true
            },
            {
                id: 2,
                name: "Cebu Beach Resort",
                location: "Cebu",
                price: 180000,
                capacity: 200,
                rating: 4.6,
                description: "Beautiful beachfront venue with sunset ceremony options.",
                image: "https://images.unsplash.com/photo-1519167758481-83f550bb49b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1194&q=80",
                featured: true
            },
            {
                id: 3,
                name: "Tagaytay Garden Villa",
                location: "Tagaytay",
                price: 150000,
                capacity: 150,
                rating: 4.9,
                description: "Scenic garden venue with Taal Volcano view.",
                image: "https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                featured: true
            },
            {
                id: 4,
                name: "Davao Convention Center",
                location: "Davao",
                price: 220000,
                capacity: 500,
                rating: 4.5,
                description: "Modern convention center with state-of-the-art facilities.",
                image: "https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80"
            },
            {
                id: 5,
                name: "Batangas Vineyard Estate",
                location: "Batangas",
                price: 190000,
                capacity: 180,
                rating: 4.7,
                description: "Rustic vineyard with romantic outdoor ceremony spaces.",
                image: "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80"
            },
            {
                id: 6,
                name: "Manila Rooftop Garden",
                location: "Manila",
                price: 120000,
                capacity: 120,
                rating: 4.4,
                description: "Modern rooftop venue with city skyline views.",
                image: "https://images.unsplash.com/photo-1478147427282-58a87a120781?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
            }
        ];

        // ===== INITIALIZATION =====
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the page
            updateWishlistCount();
            loadFeaturedVenues();
            loadAllVenues();
            loadAdminData();
            
            // Set up event listeners
            document.getElementById('priceFilter').addEventListener('input', updatePriceValue);
            document.getElementById('booking-form').addEventListener('submit', submitBooking);
            document.getElementById('add-venue-form').addEventListener('submit', addNewVenue);
            
            // Set default date for booking
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            document.getElementById('booking-date').min = tomorrow.toISOString().split('T')[0];
            
            // Load default budget calculation
            calculateBudget();
        });

        // ===== NAVIGATION FUNCTIONS =====
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });
            
            // Remove active class from all nav links
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.classList.remove('active');
            });
            
            // Show selected section
            document.getElementById(`${sectionId}-section`).classList.remove('hidden');
            
            // Add active class to clicked nav link
            document.getElementById(`${sectionId}-link`).classList.add('active');
            
            // Load data for the section
            if (sectionId === 'venues') {
                loadAllVenues();
            } else if (sectionId === 'wishlist') {
                loadWishlist();
            } else if (sectionId === 'budget') {
                calculateBudget();
            }
            
            // Scroll to top
            window.scrollTo(0, 0);
        }

        function showAdminTab(tabId) {
            // Hide all admin tabs
            document.querySelectorAll('.admin-tab').forEach(tab => {
                tab.classList.add('hidden');
            });
            
            // Remove active class from all admin nav links
            document.querySelectorAll('.admin-sidebar a').forEach(link => {
                link.classList.remove('active');
            });
            
            // Show selected tab
            document.getElementById(`admin-${tabId}`).classList.remove('hidden');
            
            // Add active class to clicked nav link
            document.querySelector(`.admin-sidebar a[onclick="showAdminTab('${tabId}')"]`).classList.add('active');
            
            // Load data for the tab
            if (tabId === 'dashboard') {
                loadAdminDashboard();
            } else if (tabId === 'venues') {
                loadAdminVenues();
            } else if (tabId === 'bookings') {
                loadAdminBookings();
            } else if (tabId === 'users') {
                loadAdminUsers();
            }
        }

        // ===== VENUE FUNCTIONS =====
        function loadFeaturedVenues() {
            const container = document.getElementById('featured-venues');
            const featured = venues.filter(v => v.featured);
            
            container.innerHTML = featured.map(venue => createVenueCard(venue)).join('');
        }

        function loadAllVenues() {
            const container = document.getElementById('venues-container');
            container.innerHTML = venues.map(venue => createVenueCard(venue)).join('');
        }

        function createVenueCard(venue) {
            const isInWishlist = wishlist.includes(venue.id);
            
            return `
                <div class="venue-card" data-id="${venue.id}">
                    <img src="${venue.image}" alt="${venue.name}" class="venue-image">
                    <div class="venue-content">
                        <div class="venue-header">
                            <div class="venue-name">${venue.name}</div>
                            <div class="venue-price">₱${venue.price.toLocaleString()}</div>
                        </div>
                        
                        <div class="venue-location">
                            <i class="fas fa-map-marker-alt"></i> ${venue.location}
                        </div>
                        
                        <div class="venue-rating">
                            ${'⭐'.repeat(Math.floor(venue.rating))}${venue.rating % 1 !== 0 ? '½' : ''} ${venue.rating}
                        </div>
                        
                        <div class="venue-capacity">
                            <i class="fas fa-users"></i> Up to ${venue.capacity} guests
                        </div>
                        
                        <p>${venue.description}</p>
                        
                        <div class="venue-actions">
                            <button class="wishlist-btn ${isInWishlist ? 'active' : ''}" onclick="toggleWishlist(${venue.id})">
                                <i class="fas ${isInWishlist ? 'fa-heart' : 'fa-heart'}"></i>
                                ${isInWishlist ? 'Saved' : 'Save'}
                            </button>
                            <button class="btn btn-primary" onclick="openBookingModal(${venue.id})">
                                <i class="fas fa-calendar-check"></i> Book Now
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }

        function applyFilters() {
            const price = parseInt(document.getElementById('priceFilter').value);
            const location = document.getElementById('locationFilter').value;
            const rating = parseFloat(document.getElementById('ratingFilter').value);
            const capacity = document.getElementById('capacityFilter').value;
            
            const filteredVenues = venues.filter(venue => {
                // Price filter
                if (venue.price > price) return false;
                
                // Location filter
                if (location && venue.location !== location) return false;
                
                // Rating filter
                if (rating && venue.rating < rating) return false;
                
                // Capacity filter
                if (capacity && venue.capacity < parseInt(capacity)) return false;
                
                return true;
            });
            
            const container = document.getElementById('venues-container');
            container.innerHTML = filteredVenues.map(venue => createVenueCard(venue)).join('');
        }

        function resetFilters() {
            document.getElementById('priceFilter').value = 1000000;
            document.getElementById('locationFilter').value = '';
            document.getElementById('ratingFilter').value = '0';
            document.getElementById('capacityFilter').value = '';
            
            updatePriceValue();
            loadAllVenues();
        }

        function updatePriceValue() {
            const price = document.getElementById('priceFilter').value;
            document.getElementById('priceValue').textContent = `₱0 - ₱${parseInt(price).toLocaleString()}`;
        }

        // ===== WISHLIST FUNCTIONS =====
        function toggleWishlist(venueId) {
            if (wishlist.includes(venueId)) {
                wishlist = wishlist.filter(id => id !== venueId);
            } else {
                wishlist.push(venueId);
            }
            
            // Save to localStorage
            localStorage.setItem('wedding_wishlist', JSON.stringify(wishlist));
            
            // Update UI
            updateWishlistCount();
            
            // Update button state
            const buttons = document.querySelectorAll(`.wishlist-btn[onclick="toggleWishlist(${venueId})"]`);
            buttons.forEach(button => {
                if (wishlist.includes(venueId)) {
                    button.classList.add('active');
                    button.innerHTML = '<i class="fas fa-heart"></i> Saved';
                } else {
                    button.classList.remove('active');
                    button.innerHTML = '<i class="far fa-heart"></i> Save';
                }
            });
            
            // If on wishlist page, reload
            if (!document.getElementById('wishlist-section').classList.contains('hidden')) {
                loadWishlist();
            }
        }

        function updateWishlistCount() {
            document.getElementById('wishlist-count').textContent = `(${wishlist.length})`;
        }

        function loadWishlist() {
            const container = document.getElementById('wishlist-container');
            const emptyMessage = document.getElementById('wishlist-empty');
            
            if (wishlist.length === 0) {
                container.innerHTML = '';
                emptyMessage.classList.remove('hidden');
                return;
            }
            
            emptyMessage.classList.add('hidden');
            
            const wishlistVenues = venues.filter(venue => wishlist.includes(venue.id));
            container.innerHTML = wishlistVenues.map(venue => createVenueCard(venue)).join('');
        }

        // ===== BUDGET CALCULATOR FUNCTIONS =====
        function calculateBudget() {
            const budget = parseInt(document.getElementById('totalBudget').value) || 500000;
            
            // Calculate allocations
            const venueBudget = budget * 0.4;
            const cateringBudget = budget * 0.3;
            const decorationBudget = budget * 0.2;
            const miscBudget = budget * 0.1;
            
            // Update UI
            document.getElementById('budget-amount').textContent = `₱${budget.toLocaleString()}`;
            document.getElementById('venue-budget').textContent = `₱${Math.round(venueBudget).toLocaleString()}`;
            document.getElementById('catering-budget').textContent = `₱${Math.round(cateringBudget).toLocaleString()}`;
            document.getElementById('decoration-budget').textContent = `₱${Math.round(decorationBudget).toLocaleString()}`;
            document.getElementById('misc-budget').textContent = `₱${Math.round(miscBudget).toLocaleString()}`;
            
            // Show results
            document.getElementById('budget-results-container').classList.remove('hidden');
            
            // Find recommended packages (venues within 20% of venue budget)
            const minBudget = venueBudget * 0.8;
            const maxBudget = venueBudget * 1.2;
            
            const recommendedVenues = venues.filter(venue => 
                venue.price >= minBudget && venue.price <= maxBudget
            ).slice(0, 3);
            
            const container = document.getElementById('recommended-packages');
            if (recommendedVenues.length > 0) {
                container.innerHTML = recommendedVenues.map(venue => createVenueCard(venue)).join('');
            } else {
                container.innerHTML = '<p>No exact matches found. Try adjusting your budget or browse all venues.</p>';
            }
        }

        // ===== BOOKING FUNCTIONS =====
        function openBookingModal(venueId) {
            currentVenueId = venueId;
            const venue = venues.find(v => v.id === venueId);
            
            // Fill modal with venue info
            document.getElementById('booking-venue').value = venue.name;
            document.getElementById('total-price').value = `₱${venue.price.toLocaleString()}`;
            
            // Show modal
            document.getElementById('booking-modal').classList.remove('hidden');
        }

        function closeBookingModal() {
            document.getElementById('booking-modal').classList.add('hidden');
            currentVenueId = null;
        }

        function submitBooking(e) {
            e.preventDefault();
            
            const venue = venues.find(v => v.id === currentVenueId);
            const date = document.getElementById('booking-date').value;
            const guests = document.getElementById('guest-count').value;
            const requests = document.getElementById('special-requests').value;
            
            // Create booking object
            const booking = {
                id: bookings.length + 1,
                venueId: currentVenueId,
                venueName: venue.name,
                customerName: "Cesar Guiritan",
                date: date,
                guests: parseInt(guests),
                amount: venue.price,
                status: "pending",
                requests: requests,
                created: new Date().toISOString().split('T')[0]
            };
            
            // Add to bookings
            bookings.push(booking);
            localStorage.setItem('wedding_bookings', JSON.stringify(bookings));
            
            // Show success message
            alert(`Booking request submitted for ${venue.name} on ${date}. We'll contact you to confirm.`);
            
            // Close modal
            closeBookingModal();
            
            // Update admin dashboard if visible
            if (!document.getElementById('admin-dashboard').classList.contains('hidden')) {
                loadAdminDashboard();
            }
        }

        // ===== ADMIN FUNCTIONS =====
        function loadAdminData() {
            loadAdminDashboard();
            loadAdminVenues();
            loadAdminBookings();
            loadAdminUsers();
        }

        function loadAdminDashboard() {
            // Update stats
            document.getElementById('total-bookings').textContent = bookings.length;
            document.getElementById('pending-bookings').textContent = bookings.filter(b => b.status === 'pending').length;
            document.getElementById('total-venues').textContent = venues.length;
            
            const totalRevenue = bookings
                .filter(b => b.status === 'confirmed')
                .reduce((sum, booking) => sum + booking.amount, 0);
            document.getElementById('total-revenue').textContent = `₱${(totalRevenue / 1000000).toFixed(1)}M`;
            
            // Load recent bookings
            const recentBookings = bookings.slice(-5).reverse();
            const container = document.getElementById('recent-bookings');
            
            container.innerHTML = recentBookings.map(booking => `
                <tr>
                    <td>#${booking.id}</td>
                    <td>${booking.customerName}</td>
                    <td>${booking.venueName}</td>
                    <td>${booking.date}</td>
                    <td>₱${booking.amount.toLocaleString()}</td>
                    <td><span class="status-badge status-${booking.status}">${booking.status}</span></td>
                    <td>
                        <button class="btn btn-primary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="updateBookingStatus(${booking.id}, 'confirmed')">
                            Approve
                        </button>
                        <button class="btn btn-secondary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="updateBookingStatus(${booking.id}, 'cancelled')">
                            Reject
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        function loadAdminVenues() {
            const container = document.getElementById('admin-venues-list');
            
            container.innerHTML = venues.map(venue => `
                <tr>
                    <td>${venue.id}</td>
                    <td>${venue.name}</td>
                    <td>${venue.location}</td>
                    <td>₱${venue.price.toLocaleString()}</td>
                    <td>${venue.capacity}</td>
                    <td>${venue.rating} ⭐</td>
                    <td>
                        <button class="btn btn-primary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="editVenue(${venue.id})">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-secondary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="deleteVenue(${venue.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        function loadAdminBookings() {
            const container = document.getElementById('all-bookings');
            
            container.innerHTML = bookings.map(booking => `
                <tr>
                    <td>#${booking.id}</td>
                    <td>${booking.customerName}</td>
                    <td>${booking.venueName}</td>
                    <td>${booking.date}</td>
                    <td>${booking.guests}</td>
                    <td>₱${booking.amount.toLocaleString()}</td>
                    <td><span class="status-badge status-${booking.status}">${booking.status}</span></td>
                    <td>
                        <button class="btn btn-primary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="updateBookingStatus(${booking.id}, 'confirmed')">
                            Confirm
                        </button>
                        <button class="btn btn-secondary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;" 
                                onclick="updateBookingStatus(${booking.id}, 'cancelled')">
                            Cancel
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        function loadAdminUsers() {
            const users = [
                { id: 1, name: "John Smith", email: "john@example.com", role: "user", joined: "2023-01-15", bookings: 3 },
                { id: 2, name: "Maria Garcia", email: "maria@example.com", role: "user", joined: "2023-02-20", bookings: 1 },
                { id: 3, name: "David Chen", email: "david@example.com", role: "user", joined: "2023-03-10", bookings: 2 },
                { id: 4, name: "Admin User", email: "admin@weddingplanner.com", role: "admin", joined: "2023-01-01", bookings: 0 }
            ];
            
            const container = document.getElementById('users-list');
            
            container.innerHTML = users.map(user => `
                <tr>
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.role}</td>
                    <td>${user.joined}</td>
                    <td>${user.bookings}</td>
                    <td>
                        <button class="btn btn-primary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button class="btn btn-secondary" style="padding: 0.3rem 0.5rem; font-size: 0.8rem;">
                            <i class="fas fa-ban"></i>
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        function updateBookingStatus(bookingId, status) {
            const booking = bookings.find(b => b.id === bookingId);
            if (booking) {
                booking.status = status;
                localStorage.setItem('wedding_bookings', JSON.stringify(bookings));
                
                // Reload admin data
                loadAdminDashboard();
                loadAdminBookings();
                
                alert(`Booking #${bookingId} has been ${status}`);
            }
        }

        function showAddVenueModal() {
            document.getElementById('add-venue-modal').classList.remove('hidden');
        }

        function closeAddVenueModal() {
            document.getElementById('add-venue-modal').classList.add('hidden');
            document.getElementById('add-venue-form').reset();
        }

        function addNewVenue(e) {
            e.preventDefault();
            
            const newVenue = {
                id: venues.length + 1,
                name: document.getElementById('venue-name').value,
                location: document.getElementById('venue-location').value,
                price: parseInt(document.getElementById('venue-price').value),
                capacity: parseInt(document.getElementById('venue-capacity').value),
                rating: parseFloat(document.getElementById('venue-rating').value),
                description: document.getElementById('venue-description').value,
                image: document.getElementById('venue-image').value || "https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80",
                featured: false
            };
            
            venues.push(newVenue);
            alert(`Venue "${newVenue.name}" added successfully!`);
            
            closeAddVenueModal();
            loadAdminVenues();
            
            // Update venues page if visible
            if (!document.getElementById('venues-section').classList.contains('hidden')) {
                loadAllVenues();
            }
        }

        function editVenue(venueId) {
            const venue = venues.find(v => v.id === venueId);
            if (venue) {
                // In a real system, this would open an edit form
                alert(`Edit feature for "${venue.name}" would open here. In this, use "Add Venue" to create new venues.`);
            }
        }

        function deleteVenue(venueId) {
            if (confirm("Are you sure you want to delete this venue? This action cannot be undone.")) {
                venues = venues.filter(v => v.id !== venueId);
                loadAdminVenues();
                
                // Update venues page if visible
                if (!document.getElementById('venues-section').classList.contains('hidden')) {
                    loadAllVenues();
                }
                
                alert("Venue deleted successfully!");
            }
        }
    </script>
</body>
</html>