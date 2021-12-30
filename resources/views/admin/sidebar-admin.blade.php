<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">الموقع</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="/admin" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          ادارة الصور
        </a>
      </li>
      <li class="nav-item">
        <a href="/admins" class="nav-link" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          الأعضاء
        </a>
      </li>
      <li>
        <a href="/adgear" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          المعدات
        </a>
      </li>
      <li>
        <a href="adcontact" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          التواصل
        </a>
      </li>
      <li>
        <a href="/adabout" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          من نحن
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>
          <form action="logout" method="post">
            @csrf 
            <button type="submit" class="btn btn-primary">تسجيل الخروج</button>
          </form>
        </strong>
      </a>

    </div>
  </div>