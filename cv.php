<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <title>Ximena Uribe Juárez - CV Profesional</title>

    <!-- Estilos personalizados con paleta de colores ejecutiva / elegante -->
    <style>
      :root {
        --sidebar-bg: #090d16;        /* Azul medianoche profundo y sobrio */
        --accent-blue: #3b82f6;       /* Azul cobalto corporativo */
        --body-bg: #f1f5f9;           /* Gris pizarra muy suave */
        --card-bg: #ffffff;           /* Blanco puro para tarjetas */
      }
      body {
        background-color: var(--body-bg);
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        color: #334155;
      }
      .sidebar-exec {
        background-color: var(--sidebar-bg) !important;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
      }
      .text-exec-primary {
        color: #0f172a !important;
      }
      .text-exec-accent {
        color: var(--accent-blue) !important;
      }
      .badge-exec {
        background-color: #e0f2fe !important;
        color: #0369a1 !important;
        font-weight: 600;
        letter-spacing: 0.3px;
      }
      .profile-img {
        width: 125px;
        height: 125px;
        object-fit: cover;
        border: 3px solid rgba(59, 130, 246, 0.4);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
      }
      .card-exec {
        border: 1px solid #e2e8f0;
        background-color: var(--card-bg);
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
        transition: all 0.25s ease-in-out;
      }
      .card-exec:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        transform: translateY(-2px);
      }
      /* Estilo de botones del menú lateral ejecutivos */
      .nav-exec-btn {
        background-color: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        color: #94a3b8;
        transition: all 0.2s ease;
      }
      .nav-exec-btn:hover {
        background-color: rgba(59, 130, 246, 0.15);
        color: #ffffff;
        border-color: rgba(59, 130, 246, 0.3);
      }
      .nav-exec-btn.active-exec {
        background-color: var(--accent-blue) !important;
        color: #ffffff !important;
        border-color: var(--accent-blue) !important;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
      }
      /* Animación de transición para las secciones */
      .cv-section {
        display: none;
      }
      .cv-section.active {
        display: block;
        animation: fadeIn 0.35s cubic-bezier(0.16, 1, 0.3, 1);
      }
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
      }
    </style>
  </head>
  <body>

    <div class="container my-5">
      <div class="row shadow-lg rounded-4 overflow-hidden bg-white" style="min-height: 600px;">
        
        <!-- ================= SIDEBAR (MENÚ LATERAL EJECUTIVO) ================= -->
        <div class="col-lg-4 sidebar-exec text-white p-4 p-md-5 d-flex flex-column justify-content-between">
          
          <div>
            <!-- Foto de Perfil y Nombre -->
            <div class="text-center mb-4">
              <img src="yocv.jpeg" class="rounded-circle profile-img mb-3" alt="yocv">
              <h3 class="fw-bold mb-1 fs-5 text-white">Ximena Uribe Juárez</h3>
              <p class="text-info fw-semibold small mb-0" style="letter-spacing: 0.5px;">Estudiante de Informática</p>
            </div>

            <hr class="border-secondary opacity-25 my-4">

            <!-- MENÚ DE BOTONES INTERACTIVOS -->
            <div class="mb-4">
              <p class="text-uppercase text-secondary fs-7 fw-bold mb-3" style="font-size: 0.75rem; letter-spacing: 1px;">Navegación</p>
              <div class="d-grid gap-2">
                <button onclick="mostrarSeccion('perfil', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3 active-exec"><i class="bi bi-person-badge me-2 text-info"></i>Perfil Profesional</button>
                <button onclick="mostrarSeccion('proyectos', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3"><i class="bi bi-laptop me-2 text-info"></i>Proyectos Destacados</button>
                <button onclick="mostrarSeccion('educacion', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3"><i class="bi bi-mortarboard me-2 text-info"></i>Educación & Certificados</button>
                <button onclick="mostrarSeccion('habilidades', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3"><i class="bi bi-cpu me-2 text-info"></i>Habilidades Técnicas</button>
                <button onclick="mostrarSeccion('contacto', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3"><i class="bi bi-person-lines-fill me-2 text-info"></i>Contacto</button>
                <button onclick="mostrarSeccion('idiomas', this)" class="btn nav-exec-btn btn-sm text-start py-2.5 px-3"><i class="bi bi-translate me-2 text-info"></i>Idiomas</button>
              </div>
            </div>
          </div>

          <div class="text-center text-secondary small mt-4 opacity-50" style="font-size: 0.8rem;">
            <span>UNAM • 2026</span>
          </div>

        </div>

        <!-- ================= CONTENIDO PRINCIPAL (COLUMNA DERECHA) ================= -->
        <div class="col-lg-8 p-4 p-md-5 bg-white d-flex align-items-center">
          
          <div class="w-100">

            <!-- SECCIÓN 1: Perfil Profesional (Visible por defecto) -->
            <div id="perfil" class="cv-section active">
              <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                  <i class="bi bi-person-badge fs-4"></i>
                </div>
                <h3 class="text-exec-primary fw-bold fs-4 mb-0">Perfil Profesional</h3>
              </div>
              <p class="text-secondary lh-lg fs-6">
                Estudiante de séptimo semestre de la Licenciatura en Informática en la UNAM, apasionada por el desarrollo de software, la creación de sistemas web interactivos y la gestión avanzada de bases de datos. Con sólida experiencia práctica en modelado relacional, automatización mediante webhooks, paquetería Office de nivel profesional con análisis de datos y dominio del idioma inglés con certificación internacional.
              </p>
            </div>

            <!-- SECCIÓN 2: Proyectos Destacados (Con Dropdown de Filtrado) -->
            <div id="proyectos" class="cv-section">
              <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                <div class="d-flex align-items-center">
                  <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                    <i class="bi bi-laptop fs-4"></i>
                  </div>
                  <h3 class="text-exec-primary fw-bold fs-4 mb-0">Proyectos Destacados</h3>
                </div>
                
                <!-- Menú Desplegable (Dropdown) Ejecutivo -->
                <div class="dropdown">
                  <button class="btn btn-outline-secondary btn-sm dropdown-toggle px-3 py-1.5 shadow-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.85rem;">
                    <i class="bi bi-filter me-1 text-primary"></i> Filtrar Categoría
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item py-2 small" href="#" onclick="filtrarProyecto('todos')"><i class="bi bi-grid me-2 text-muted"></i>Ver Todos</a></li>
                    <li><a class="dropdown-item py-2 small" href="#" onclick="filtrarProyecto('python')"><i class="bi bi-code-slash me-2 text-primary"></i>Python & Base de Datos</a></li>
                    <li><a class="dropdown-item py-2 small" href="#" onclick="filtrarProyecto('chatbots')"><i class="bi bi-robot me-2 text-info"></i>Chatbots & Webhooks</a></li>
                  </ul>
                </div>
              </div>
              
              <div id="lista-proyectos" class="vstack gap-3 mt-3">
                <!-- Proyecto 1 -->
                <div class="card-exec p-4 border-start border-4 border-primary item-proyecto" data-categoria="python">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="fw-bold mb-0 text-dark fs-6">Sistema de Gestión de Calidad</h5>
                    <span class="badge badge-exec small">Python / MariaDB</span>
                  </div>
                  <p class="text-muted small mb-2 fw-medium">Desarrollado para control de procesos de Seasoning de México</p>
                  <p class="text-secondary small mb-0 lh-base">
                    Diseño e implementación de módulos para la gestión de usuarios, bitácoras de actividad, validación de aprobaciones y rechazos de productos, respaldado con una interfaz moderna en Bootstrap y un chatbot asistente.
                  </p>
                </div>

                <!-- Proyecto 2 -->
                <div class="card-exec p-4 border-start border-4 border-info item-proyecto" data-categoria="chatbots">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="fw-bold mb-0 text-dark fs-6">Asistentes Conversacionales & Chatbots</h5>
                    <span class="badge bg-light text-dark border small">Dialogflow / Make</span>
                  </div>
                  <p class="text-muted small mb-2 fw-medium">Automatización de flujos de mensajería</p>
                  <p class="text-secondary small mb-0 lh-base">
                    Construcción de JSON fulfillment payloads, integración de webhooks, túneles ngrok y estructuración de tarjetas interactivas de carrusel orientadas a plataformas de mensajería.
                  </p>
                </div>
              </div>
            </div>

            <!-- SECCIÓN 3: Educación & Certificaciones -->
            <div id="educacion" class="cv-section">
              <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                  <i class="bi bi-mortarboard fs-4"></i>
                </div>
                <h3 class="text-exec-primary fw-bold fs-4 mb-0">Educación & Certificaciones</h3>
              </div>
              
              <div class="vstack gap-3">
                <div class="card-exec p-4">
                  <h5 class="fw-bold mb-1 text-dark fs-6">Licenciatura en Informática</h5>
                  <p class="text-exec-accent fw-semibold small mb-1">Universidad Nacional Autónoma de México (UNAM)</p>
                  <p class="text-muted small mb-2"><i class="bi bi-calendar-event me-1"></i>Cursando Séptimo Semestre</p>
                  <p class="text-secondary small mb-0 lh-base">
                    Formación académica integral enfocada en bases de datos relacionales, ingeniería de software avanzada, seguridad en redes, programación orientada a objetos y arquitectura de sistemas modernos.
                  </p>
                </div>

                <div class="card-exec p-3 border-start border-4 border-success">
                  <h6 class="fw-bold mb-1 text-dark">Certificación Microsoft Access</h6>
                  <p class="text-muted small mb-0">Manejo avanzado de bases de datos relacionales, consultas complejas, formularios e informes.</p>
                </div>

                <div class="card-exec p-3 border-start border-4 border-success">
                  <h6 class="fw-bold mb-1 text-dark">Certificación Microsoft Excel</h6>
                  <p class="text-muted small mb-0">Tablas dinámicas (UNAM).</p>
                </div>

                 <div class="card-exec p-3 border-start border-4 border-success">
                  <h6 class="fw-bold mb-1 text-dark">Certificación Adobe-Photoshop</h6>
                  <p class="text-muted small mb-0">Diseño Visual usando Photoshop (Visual Design using Adobe Photoshop).</p>
                </div>
              </div>
            </div>

            <!-- SECCIÓN 4: Habilidades Técnicas -->
            <div id="habilidades" class="cv-section">
              <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                  <i class="bi bi-cpu fs-4"></i>
                </div>
                <h3 class="text-exec-primary fw-bold fs-4 mb-0">Habilidades Técnicas & Herramientas</h3>
              </div>
              <p class="text-muted small mb-3">Dominio técnico de software, lenguajes y paquetería:</p>
              <div class="d-flex flex-wrap gap-2 pt-1">
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">Paquetería Office Completa</span>
            
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">PHP / Python</span>
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">Bootstrap 5</span>
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">SQL / MariaDB</span>
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">Git & GitHub</span>
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-normal shadow-sm">Dialogflow / Webhooks</span>
              </div>
            </div>

            <!-- SECCIÓN 5: Contacto -->
            <div id="contacto" class="cv-section">
              <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                  <i class="bi bi-person-lines-fill fs-4"></i>
                </div>
                <h3 class="text-exec-primary fw-bold fs-4 mb-0">Información de Contacto</h3>
              </div>
              
              <div class="card-exec p-2">
                <div class="list-group list-group-flush">
                  <div class="list-group-item px-3 py-3 d-flex align-items-center border-0 border-bottom">
                    <i class="bi bi-envelope fs-5 text-exec-accent me-3"></i>
                    <div>
                      <span class="d-block text-muted" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px;">Correo Electrónico</span>
                      <a href="mailto:ximena.u.ju@gmail.com" class="text-dark fw-bold text-decoration-none small">ximena.u.ju@gmail.com</a>
                    </div>
                  </div>
                  <div class="list-group-item px-3 py-3 d-flex align-items-center border-0 border-bottom">
                    <i class="bi bi-phone fs-5 text-exec-accent me-3"></i>
                    <div>
                      <span class="d-block text-muted" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px;">Teléfono / Celular</span>
                      <span class="text-dark fw-bold small">+52 55 64889383</span>
                    </div>
                  </div>
                  <div class="list-group-item px-3 py-3 d-flex align-items-center border-0 border-bottom">
                    <i class="bi bi-geo-alt fs-5 text-exec-accent me-3"></i>
                    <div>
                      <span class="d-block text-muted" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px;">Ubicación</span>
                      <span class="text-dark fw-bold small">Estado de México, México</span>
                    </div>
                  </div>
                  <div class="list-group-item px-3 py-3 d-flex align-items-center border-0">
                    <i class="bi bi-github fs-5 text-exec-accent me-3"></i>
                    <div>
                      <span class="d-block text-muted" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px;">GitHub</span>
                      <a href="https://github.com" target="_blank" class="text-dark fw-bold text-decoration-none small">github.com/ximenauju-ux</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- SECCIÓN 6: Idiomas -->
            <div id="idiomas" class="cv-section">
              <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                <div class="bg-light p-2 rounded-3 me-3 text-exec-accent shadow-sm">
                  <i class="bi bi-translate fs-4"></i>
                </div>
                <h3 class="text-exec-primary fw-bold fs-4 mb-0">Idiomas</h3>
              </div>
              
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="card-exec p-3 border-start border-4 border-success">
                    <h5 class="fw-bold mb-1 fs-6 text-dark">Español</h5>
                    <p class="text-muted small mb-0">Idioma Nativo</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-exec p-3 border-start border-4 border-primary">
                    <h5 class="fw-bold mb-1 fs-6 text-dark">Inglés</h5>
                    <p class="text-muted small mb-0">Nivel Avanzado • Certificación Cambridge</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Script de control interactivo -->
    <script>
      function mostrarSeccion(idSeccion, botonClickeado) {
        // Ocultar todas las secciones de la derecha
        const secciones = document.querySelectorAll('.cv-section');
        secciones.forEach(sec => sec.classList.remove('active'));

        // Mostrar únicamente la seleccionada
        document.getElementById(idSeccion).classList.add('active');

        // Actualizar estilos activos de los botones del menú lateral
        const botones = document.querySelectorAll('.nav-exec-btn');
        botones.forEach(btn => {
          btn.classList.remove('active-exec');
        });

        botonClickeado.classList.add('active-exec');
      }

      function filtrarProyecto(categoria) {
        const proyectos = document.querySelectorAll('.item-proyecto');
        proyectos.forEach(proy => {
          if (categoria === 'todos' || proy.getAttribute('data-categoria') === categoria) {
            proy.style.display = 'block';
          } else {
            proy.style.display = 'none';
          }
        });
      }
    </script>
  </body>
</html>