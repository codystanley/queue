fetch('navigation_data.php') 
    .then(response => response.json())
    
    .then(menuData => {
        const navbarNav = document.getElementById('navbarNav');
        const ul = document.createElement('ul');
        ul.classList.add('nav','nav-fill');

        menuData.forEach(item => {
            const li = document.createElement('li');
            if (item.submenu.length > 0) {
                li.classList.add('nav-item', 'dropdown');
              } else {
                li.classList.add('nav-item'); 
              }

            const a = document.createElement('a');
            if (item.submenu.length > 0) {
                a.classList.add('nav-link', 'dropdown-toggle');
                } else {
                a.classList.add('nav-link');
                }
            a.href = item.link;
            a.textContent = item.name;
            
            if (item.submenu.length > 0) {
                a.id = `navbarDropdown${item.id}`;
                a.setAttribute('role', 'button');
                a.setAttribute('data-bs-toggle', 'dropdown');
                a.setAttribute('aria-expanded', 'false');

                const subUl = document.createElement('ul');
                subUl.classList.add('dropdown-menu');
                subUl.setAttribute('aria-labelledby', a.id);
                item.submenu.forEach(subItem => {
                    const subLi = document.createElement('li');
                    const subA = document.createElement('a');
                    subA.classList.add('dropdown-item');
                    subA.href = subItem.link;
                    subA.textContent = subItem.name;
                    subLi.appendChild(subA);
                    subUl.appendChild(subLi);
                });

                li.appendChild(subUl);
            }

            li.appendChild(a);
            ul.appendChild(li);
        });

        navbarNav.appendChild(ul);
    });
