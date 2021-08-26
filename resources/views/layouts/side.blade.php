    <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>CEO Notes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @foreach(get_ceo() as $get_ceo)
                <li><a href="{{url('Ceo?id='.encode($get_ceo['id']))}}"><i class="fa fa-circle-o"></i> {{$get_ceo['name']}}</a></li>
            @endforeach
          </ul>
        </li>
        <li>
          <a href="{{url('Magazine')}}">
            <i class="fa fa-bars"></i> <span>E-Magazine</span>
          </a>
        </li>
        <li>
          <a href="{{url('ChangeStory')}}">
            <i class="fa fa-bars"></i> <span>Change Story</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Webinar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Story</span>
          </a>
        </li>
    </ul>