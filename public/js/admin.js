document.addEventListener('DOMContentLoaded', function() {
  // تفعيل القائمة الجانبية مع دعم Laravel Routes
  const menuItems = document.querySelectorAll('.admin-sidebar li');
  menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      const link = this.querySelector('a');
      if (link.getAttribute('href') === '#') {
        e.preventDefault();
      }
      
      menuItems.forEach(i => i.classList.remove('active'));
      this.classList.add('active');
      
      // تحديث عنوان الصفحة
      const pageName = link.textContent.trim();
      document.querySelector('.content-header h2').textContent = pageName;
    });
  });


  // عرض التنبيهات من Laravel Session
  if (window.laravelSuccessMessage) {
    showAlert(window.laravelSuccessMessage, 'success');
  }

  function showAlert(message, type) {
    const alert = document.createElement('div');
    alert.className = `alert alert-${type}`;
    alert.innerHTML = `
      <span>${message}</span>
      <button class="close-alert">&times;</button>
    `;
    
    const header = document.querySelector('.content-header');
    header.parentNode.insertBefore(alert, header.nextSibling);
    
    alert.querySelector('.close-alert').addEventListener('click', () => {
      alert.remove();
    });
    
    setTimeout(() => {
      alert.remove();
    }, 5000);
  }
});