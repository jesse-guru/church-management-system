// Navigation
    document.querySelectorAll('.sidebar-menu a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Update active link
        document.querySelectorAll('.sidebar-menu a').forEach(a => a.classList.remove('active'));
        this.classList.add('active');
        
        // Show corresponding page
        const page = this.getAttribute('data-page');
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.getElementById(page).classList.add('active');
        
        // Update title
        document.getElementById('page-title').textContent = this.querySelector('span').textContent;
      });
    });

    // Modal functions
    function openModal(modalId) {
      document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
      }
    }

    // Add member (demo)
    function addMember(e) {
      e.preventDefault();
      const name = e.target[0].value;
      const row = `
        <tr>
          <td>${name}</td>
          <td>${e.target[1].value}</td>
          <td>${e.target[2].value || 'N/A'}</td>
          <td>${new Date().toISOString().split('T')[0]}</td>
          <td>
            <button class="btn btn-sm btn-primary">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
      `;
      document.getElementById('membersTable').insertAdjacentHTML('beforeend', row);
      closeModal('addMemberModal');
      alert('Member added successfully!');
      e.target.reset();
    }

    // Hide all pages except dashboard initially
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.getElementById('dashboard').classList.add('active');