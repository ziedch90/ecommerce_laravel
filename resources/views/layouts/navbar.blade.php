<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
             categories
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>liste des categories</p>
            </a>
          </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{route('category.index')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            produits
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="{{route('product.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>liste des produits</p>
            </a>
          </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{route('product.index')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            admins
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajouter admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>liste des admins</p>
            </a>
          </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            clients
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajouter client</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>liste des clients</p>
            </a>
          </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            commandes
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ajouter commmande</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>liste des commandes</p>
            </a>
          </li>
        </ul>
    </li>
    </ul>
  </nav>
