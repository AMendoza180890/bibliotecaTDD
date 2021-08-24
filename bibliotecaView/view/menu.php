<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            Biblioteca Virtual
        </div>
        <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
            <figure>
                <img src="bibliotecaView/assets/img/logoTDD.png" alt="Biblioteca" class="img-responsive center-box" style="width:15%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Tesoros de Dios</p>
        </div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled" id="menuOpciones">
                <li><a href="home" <?php if ($_GET["ruta"] == "home")
                                        echo " class='activo'"; ?>><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                <li><a href="academico" <?php if ($_GET["ruta"] == "academico" || $_GET["ruta"] == "catadecuaciones" || $_GET["ruta"] == "catlectura" || $_GET["ruta"] == "catmat")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Académico</a></li>
                <li><a href="apoyoFamiliar" <?php if ($_GET["ruta"] == "apoyoFamiliar")
                                                echo " class='activo'"; ?>><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Apoyo Familiar</a></li>
                <li><a href="conducta" <?php if ($_GET["ruta"] == "conducta" || $_GET["ruta"] == "manejoClases" || $_GET["ruta"] == "intervencionConducta")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Conducta</a></li>
                <li><a href="discapacidades" <?php if ($_GET["ruta"] == "discapacidades" || $_GET["ruta"] == "autismo" || $_GET["ruta"] == "emocional" || $_GET["ruta"] == "intelectual" || $_GET["ruta"] == "lenguaje" || $_GET["ruta"] == "motor" || $_GET["ruta"] == "aprendizaje")
                                                    echo " class='activo'"; ?>><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Discapacidades</a></li>
                <li><a href="estimulacion" <?php if ($_GET["ruta"] == "estimulacion" || $_GET["ruta"] == "autoCuido" || $_GET["ruta"] == "Cognitiva" || $_GET["ruta"] == "Comunicacion" || $_GET["ruta"] == "FisicoSensorial" || $_GET["ruta"] == "SocioEmocional")
                                                echo " class='activo'"; ?>><i class="zmdi zmdi-collection-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Estimulacion Temprana</a></li>
                <li><a href="historia" <?php if ($_GET["ruta"] == "historia")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Historias Sociales</a></li>
                <li><a href="iglesias" <?php if ($_GET["ruta"] == "iglesias" || $_GET["ruta"] == "capacitacionesIglesias" || $_GET["ruta"] == "predicas" || $_GET["ruta"] == "recursosIglesias")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Iglesias</a></li>
                <li><a href="independencia" <?php if ($_GET["ruta"] == "independencia" || $_GET["ruta"] == "habilidadesVidaDiaria" || $_GET["ruta"] == "vocacional")
                                                echo " class='activo'"; ?>><i class="zmdi zmdi-run zmdi-hc-fw"></i>&nbsp;&nbsp; Independencia</a></li>
                <li><a href="logopedia" <?php if ($_GET["ruta"] == "logopedia" || $_GET["ruta"] == "alimentacion" || $_GET["ruta"] == "audicion" || $_GET["ruta"] == "encuesta" || $_GET["ruta"] == "lengua" || $_GET["ruta"] == "lenguajeSenas" || $_GET["ruta"] == "sistemasAumentativoAlternativos" || $_GET["ruta"] == "sonidosHabla" || $_GET["ruta"] == "protocolos" || $_GET["ruta"] == "talleres" || $_GET["ruta"] == "tartamudez"|| $_GET["ruta"] == "apraxia"|| $_GET["ruta"] == "articulacion"|| $_GET["ruta"] == "fonologico"|| $_GET["ruta"] == "particulacion"|| $_GET["ruta"] == "velofaringea")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-mood zmdi-hc-fw"></i>&nbsp;&nbsp; Logopedia</a></li>
                <li><a href="piedu" <?php if ($_GET["ruta"] == "piedu" || $_GET["ruta"] == "curriculoTdd" || $_GET["ruta"] == "evalua" || $_GET["ruta"] == "individual")
                                        echo " class='activo'"; ?>><i class="zmdi zmdi-archive zmdi-hc-fw"></i>&nbsp;&nbsp; Planes Individualizados</a></li>
                <li><a href="espiritual" <?php if ($_GET["ruta"] == "espiritual")
                                                echo " class='activo'"; ?>><i class="zmdi zmdi-plus-circle-o zmdi-hc-fw"></i>&nbsp;&nbsp; Recursos Espirituales</a></li>
                <li><a href="terapia" <?php if ($_GET["ruta"] == "terapia" || $_GET["ruta"] == 'capacitacionesTerapia' || $_GET["ruta"] == 'equinoterapia' || $_GET["ruta"] == 'terapiaOcupacional' || $_GET["ruta"] == 'fisioterapia')
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-male zmdi-hc-fw"></i>&nbsp;&nbsp; Terapia</a></li>
                <li><a href="ingles" <?php if ($_GET["ruta"] == "ingles")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-translate zmdi-hc-fw"></i>&nbsp;&nbsp; Resources in English</a></li>
                <li><a href="buscar" <?php if ($_GET["ruta"] == "buscar")
                                            echo " class='activo'"; ?>><i class="zmdi zmdi-search zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar</a></li>
                <!-- <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="institution.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                            <li><a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo proveedor</a></li>
                            <li><a href="category.html"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                            <li><a href="section.html"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva sección</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                            <li><a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo docente</a></li>
                            <li><a href="student.html"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo estudiante</a></li>
                            <li><a href="personal.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo personal administrativo</a></li>
                        </ul>
                    </li> -->
            </ul>
        </div>
    </div>
</div>