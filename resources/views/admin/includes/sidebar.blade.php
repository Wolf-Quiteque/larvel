<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Navegação</li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Início</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-book-open menu-icon"></i></span>
          <span class="menu-title">Notícias</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.blog.create')}}">Adicionar</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.blog.all')}}">Listar todas</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
          <span class="menu-title">Equipa</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.team.index')}}">Cadastrar Equipa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.area.create')}}">Cadastrar Área</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.category.create')}}">
          <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
          <span class="menu-title">Categoria</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.promotion.create')}}">
          <span class="icon-bg"><i class="mdi mdi-comment-alert menu-icon"></i></span>
          <span class="menu-title">Promoção</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.slide.create')}}">
          <span class="icon-bg"><i class="mdi mdi-compare menu-icon"></i></span>
          <span class="menu-title">Slides</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.slide.create')}}">
          <span class="icon-bg"><i class="mmdi mdi-file-cloud menu-icon"></i></span>
          <span class="menu-title">Galeria</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.client.index')}}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.partner.index')}}">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Parceiros</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
          <span class="menu-title">Newsletter</span>
        </a>
      </li>

      <hr>

      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title">Palavra-passe</span>
          </a>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <form action="{{route('logout')}}" method="post"> 
              @csrf
          <button style="background-color:#181824; border:none;" class="nav-link menu-title" type="submit">
              <i class="mdi mdi-logout menu-icon"></i>
              Terminar sessão
          </button>
          </form>
        </div>
      </li>
    </ul>
  </nav>