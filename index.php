<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Church Management System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <i class="fas fa-church fa-3x"></i>
      <h2>Church</h2>
    </div>
    <div class="sidebar-menu">
      <a href="#" class="active" data-page="dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
      <a href="members.html" data-page="members"><i class="fas fa-users"></i><span>Members</span></a>
      <a href="Services-Events.html" data-page="services"><i class="fas fa-calendar-alt"></i><span>Services & Events</span></a>
      <a href="#" data-page="attendance"><i class="fas fa-check-circle"></i><span>Attendance</span></a>
      <a href="#" data-page="groups"><i class="fas fa-user-friends"></i><span>Small Groups</span></a>
      <a href="#" data-page="giving"><i class="fas fa-donate"></i><span>Giving</span></a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="header">
      <h1 id="page-title">Dashboard</h1>
      <div class="user-info">
        <span>Welcome, Pastor John</span>
        <div class="user-avatar">PJ</div>
      </div>
    </div>

    <div class="page-content">

      <!-- Dashboard Page -->
      <div id="dashboard" class="page active">
        <div class="stats-grid">
          <div class="stat-card">
            <i class="fas fa-users fa-2x"></i>
            <h3>1,248</h3>
            <p>Total Members</p>
          </div>
          <div class="stat-card success">
            <i class="fas fa-calendar-check fa-2x"></i>
            <h3>89%</h3>
            <p>Attendance Rate</p>
          </div>
          <div class="stat-card warning">
            <i class="fas fa-donate fa-2x"></i>
            <h3>$24,500</h3>
            <p>This Month Giving</p>
          </div>
          <div class="stat-card info">
            <i class="fas fa-calendar fa-2x"></i>
            <h3>12</h3>
            <p>Upcoming Events</p>
          </div>
        </div>

        <div class="card">
          <h2>Recent Activity</h2>
          <p>New member: Sarah Johnson joined today</p>
          <p>Service tomorrow at 10:00 AM - "Faith & Family"</p>
          <p>Youth Group meeting on Friday</p>
        </div>
      </div>

      <!-- Members Page -->
      <div id="members" class="page">
        <div class="card">
          <div style="display:flex; justify-content:space-between; margin-bottom:20px;">
            <h2>Church Members</h2>
            <button class="btn btn-primary" onclick="openModal('addMemberModal')">Add Member</button>
          </div>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Join Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="membersTable">
              <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>(555) 123-4567</td>
                <td>2023-01-15</td>
                <td>
                  <button class="btn btn-sm btn-primary">Edit</button>
                  <button class="btn btn-sm btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Jane Smith</td>
                <td>jane@example.com</td>
                <td>(555) 987-6543</td>
                <td>2022-08-20</td>
                <td>
                  <button class="btn btn-sm btn-primary">Edit</button>
                  <button class="btn btn-sm btn-danger">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Other pages will be shown/hidden with JS -->
      <div id="services" class="page">
        <div class="card">
          <h2>Services & Events</h2>
          <p>Upcoming Sunday Service: Nov 24, 2025 - 10:00 AM</p>
          <p>Christmas Carol Service: Dec 24, 2025</p>
        </div>
      </div>

      <div id="attendance" class="page">
        <div class="card">
          <h2>Attendance Tracking</h2>
          <p>Last Sunday: 312 attendees</p>
        </div>
      </div>

      <div id="groups" class="page">
        <div class="card">
          <h2>Small Groups</h2>
          <p>8 active small groups meeting weekly</p>
        </div>
      </div>

      <div id="giving" class="page">
        <div class="card">
          <h2>Giving & Donations</h2>
          <p>Total this year: $248,920</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Add Member Modal -->
  <div id="addMemberModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('addMemberModal')">&times;</span>
      <h2>Add New Member</h2>
      <form onsubmit="addMember(event)">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" required />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" required />
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="tel" />
        </div>
        <div class="form-group">
          <label>Join Date</label>
          <input type="date" />
        </div>
        <button type="submit" class="btn btn-success">Save Member</button>
        <button type="button" class="btn" onclick="closeModal('addMemberModal')">Cancel</button>
      </form>
    </div>
  </div>

  <script href="script.js"></script>
</body>
</html>