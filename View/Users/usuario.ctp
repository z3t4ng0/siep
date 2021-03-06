<!-- app/View/Users/usuario.ctp -->
<div class="users form">
<!-- start main -->
<div class="TituloSec"><?php echo $nombreCentro ?></div>
<div id="ContenidoSec">
<?php if(($userCentroNivel == 'Común - Inicial') || ($userCentroNivel == 'Común - Primario') || ($userCentroNivel == 'Común - Inicial - Primario') || ($userPuesto === 'Atei')): ?>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">INICIAL Y PRIMARIA | INSCRIPCIONES 2020 PARA HERMANOS</h3>
	  </div>
	  <div class="panel-body">
	    <p> Se desarrollarán los días 2 y 3 de septiembre. La operatoria en SIEP incluye los siguiente pasos: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Alta de inscripción": Desde el menú ALUMNADO --> INSCRIPCIONES, click en el botón "+AGREGAR", completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": 2020</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": "Hermano de alumno regular"</li>
			<li>"Indique el alumno regular de la institución*": (indique nombre/apellido y/o dni del alumno regular)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	  </ul>
	</div>
	<div class="panel panel-danger">
	  <div class="panel-heading">
	    <h3 class="panel-title">INICIAL Y PRIMARIA | IMPORTANTE</h3>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">INSCRIPCIÓN DE HERMANOS: en el caso excepcional que por alguna razón específica no se pueda realizar la carga en SIEP de una inscripción, deberán realizar la carga de ese registro en el modelo de planilla indicada en el siguiente enlace <a href="https://drive.google.com/file/d/1pfszuOoffwEyNq5w75M8K_NGJrV9EYBe/view?usp=sharing" target="_blank">(ABRIR Y DESCARGAR PLLA P/INSCRIPCIÓN DE HERMANOS)</a>. </li>
	    <li class="list-group-item">En todas las instancias de inscripción 2020 (“de Hermanos” y “Generales”), se deberá indicar en el campo “Sección*” del formulario de inscripción de SIEP, una sección (sala/grado/curso) sin división, para una correcta lectura de la EVOLUCIÓN DE LAS VACANTES desde el menú VER → INGRESANTES 2020. Luego del PRIMER SORTEO, opcionalmente, las instituciones podrán REUBICAR a los alumnos 2020 en las secciones correspondientes. </li>
	   </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">INICIAL Y PRIMARIA | INSCRIPCIONES 2020 POR PASES (Sólo para casos de CAMBIOS DE INSTITUCIÓN EN UN MISMO CICLO LECTIVO)</h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para registrar inscripciones por pases en SIEP entre una institución origen (IO) y una institución destino (ID): </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Verificación de Baja en la IO": Desde el menú ALTA DE PERSONAS, indicar en "BÚSQUEDA" un alumno y luego click en el botón "BUSCAR". </li>
	    <li class="list-group-item">2º PASO | "Alta de inscripción por pase": Completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": (indicar el corriente ciclo lectivo)</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": Pase</li>
	    	<li>"Pase": (Indique IO)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	    </li>
	    <li class="list-group-item">3º PASO | "Revisión de la inscripción recién registrada": verifique en "Datos de Alta" figure el nombre correcto de la IO.</li>
	  </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">INICIAL Y PRIMARIA | INSCRIPCIONES 2020 GENERALES</h3>
	  </div>
	  <div class="panel-body">
	    <p> Se desarrollarán los días 4 y 6 de septiembre <a href="https://drive.google.com/file/d/1svHmetvUz-EhyQPEeFD2AK7xpqwsRMHo/view?usp=sharing" target="_blank"> (ABRIR Y DESCARGAR EL MODELO DE PLANILLA) </a>. La operatoria en SIEP incluye los siguiente pasos: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Alta de inscripción": Desde el menú ALUMNADO --> INSCRIPCIONES, click en el botón "+AGREGAR", completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": 2020</li>
	    	<li>"Estado de la inscripción*": NO CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": Común</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	  </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">INICIAL Y PRIMARIA | PROMOCIONES </h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para registrar PROMOCIONES en SIEP <a href="https://drive.google.com/file/d/1VsFgAyMFQuPrFP8uZiGYfHGqADrqtTHv/view?usp=sharing" target="_blank">(VER TAMBIÉN VIDEO TUTORIAL EN LÍNEA)</a>: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Identificación de la sección origen ": Desde el menú OFERTAS --> SECCIONES, indicar en "BÚSQUEDA" una sección (sala/grado) origen y luego click en el botón "BUSCAR". </li>
	    <li class="list-group-item">2º PASO | "Ver el detalle de la sección": click en el botón VERDE de la tarjeta de la sección.	
	    </li>
	    <li class="list-group-item">3º PASO | "Promocionar a la sección destino": Desde "OPCIONES", click en el botón "Promocionar". Luego señalar en el listado el/los alumnos para ser promocionados e indicar en "OPCIONES DE PROMOCIÓN" la sección destino. Por último, click en el botón "Confirmar promoción".</li>
	  </ul>
	</div>
<?php endif; ?>	
<?php if($userCentroNivel == 'Común - Secundario' || ($userPuesto === 'Atei')): ?>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">SECUNDARIA | INSCRIPCIONES 2020 PARA HERMANOS</h3>
	  </div>
	  <div class="panel-body">
	    <p> Se desarrollarán los días 5 al 6 de agosto. La operatoria en SIEP incluye los siguiente pasos: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Alta de inscripción": Desde el menú ALUMNADO --> INSCRIPCIONES, click en el botón "+AGREGAR", completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": 2020</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": "Hermano de alumno regular"</li>
			<li>"Indique el alumno regular de la institución*": (indique nombre/apellido y/o dni del alumno regular)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	  </ul>
	</div>
	<div class="panel panel-danger">
	  <div class="panel-heading">
	    <h3 class="panel-title">SECUNDARIO | IMPORTANTE</h3>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">INSCRIPCIÓN DE HERMANOS: en el caso excepcional que por alguna razón específica no se pueda realizar la carga en SIEP de una inscripción, deberán realizar la carga de ese registro en el modelo de planilla indicada en el siguiente enlace <a href="https://drive.google.com/file/d/1Y_T7RFGChjru4iDlDppZ6wQDsmQGUCBn/view?usp=sharing" target="_blank">(ABRIR Y DESCARGAR PLLA P/INSCRIPCIÓN DE HERMANOS)</a>. </li>
	    <li class="list-group-item">En todas las instancias de inscripción 2020 (“de Hermanos” y “Generales”), se deberá indicar en el campo “Sección*” del formulario de inscripción de SIEP, una sección sin división, para una correcta lectura de la EVOLUCIÓN DE LAS VACANTES desde el menú VER → INGRESANTES 2020. Luego del PRIMER SORTEO, opcionalmente, las instituciones podrán REUBICAR a los alumnos 2020 en las secciones correspondientes. </li>
	   </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">SECUNDARIA | INSCRIPCIONES GENERALES</h3>
	  </div>
	  <div class="panel-body">
	    <p> Se desarrollarán los días 22 y 23 de agosto y los días 5 y 6 de diciembre<a href="https://drive.google.com/file/d/1Gf7qaDCpvdD8tRp_I4Cs6CIu98vr_U0I/view?usp=sharing" target="_blank"> (ABRIR Y DESCARGAR EL MODELO DE PLANILLA) </a>. La operatoria en SIEP incluye los siguiente pasos: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Alta de inscripción": Desde el menú ALUMNADO --> INSCRIPCIONES, click en el botón "+AGREGAR", completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": 2020</li>
	    	<li>"Estado de la inscripción*": NO CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Otro)</li>
	    	<li>"Tipo de inscripción*": Común</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	  </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">SECUNDARIA | INSCRIPCIONES POR PASES (Sólo para casos de CAMBIOS DE INSTITUCIÓN EN UN MISMO CICLO LECTIVO)</h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para registrar INSCRIPCIONES POR PASE (cambio de institución en el mismo ciclo dentro de TDF) de ALUMNOS CON PASES EVALUADOS Y APROBADOS por la Supervisión Técnica, entre una institución origen (IO) y una institución destino (ID): </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Verificación de Baja en la IO": Desde el menú ALTA DE PERSONAS, indicar en "BÚSQUEDA" un alumno y luego click en el botón "BUSCAR". </li>
	    <li class="list-group-item">2º PASO | "Alta de inscripción por pase": Completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": (indicar el corriente ciclo lectivo)</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección)</li>
	    	<li>"Tipo de inscripción*": Pase</li>
	    	<li>"Pase": (Indique IO)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	    </li>
	    <li class="list-group-item">3º PASO | "Revisión de la inscripción recién registrada": verifique en "Datos de Alta" figure el nombre correcto de la IO.</li>
	  </ul>
	</div>
<!--<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">SECUNDARIA | INICIACIÓN DE PROPUESTA DE PASE (Nuevo procedimiento)</h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para iniciar una propuesta de pase desde una institución origen (IO) a la Supervisión General de Secundaria para que, luego de ser confirmada, la IO genere una nueva inscripción por pase: </p>
	  </div>
	  <!-- List group 
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Acceso al formulario p/agregar pase": Desde el menú ALUMNADO  PASES, click en el botón "+AGREGAR". </li>
	    <li class="list-group-item">2º PASO | "Alta de registro de pase": Completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Institución Destino*": (Indique la institución que corresponda)</li>
	    	<li>"Año de estudio*": (Indique la opción de año correspondiente)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle del pase registrado)</li>
	    </ul>	
	    <p>OBSERVACIÓN: Una vez guardado el registro de pase, tanto la IO como la ID podrán visualizar el registro de pase desde el menú ALUMNADO  PASE, pero sólo desde la Supervisión se podrá acceder a la edición del registro.</p>
	    </li>
	    <li class="list-group-item">3º PASO | "Seguimiento del estado del pase": desde el menú ALUMNADO  PASE se podrá visualizar en la tarjeta del pase, el "Estado" del mismo, pudiendo ser:</li>
		    <ul>
		    	<li>INICIADO: Al momento de generarlo la IO.</li>
		    	<li>EVALUACIÓN: Al momento de comenzar a ser revisado desde la Supervisión General.</li>
		    	<li>RECHAZADO: Al momento de no ser aprobado por la Supervisión General.</li>
		    	<li>CONFIRMADO: Al momento de ser aprobado por la Supervisión General. A partir de este estado la ID está habilitada de generar una nueva "Alta de inscripción por pase".</li>
		    </ul>
		    <li class="list-group-item">4º PASO | "Alta de inscripción por pase": Completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": (indicar el corriente ciclo lectivo)</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": Pase</li>
	    	<li>"Pase": (Indique IO)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	    </li>
	    <li class="list-group-item">5º PASO | "Revisión de la inscripción recién registrada": verifique en "Datos de Alta" figure el nombre correcto de la IO.</li>
	  </ul>
	</div>
!-->
<?php endif; ?>	
<!-- Visualizable sólo para los roles de usuarios de Secundario de adultos. -->
<?php if($userCentroNivel == 'Adultos - Primario' || $userCentroNivel == 'Adultos - Secundario' || $userPuesto === 'Atei') : ?>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">PRIMARIO/SECUNDARIO | ADULTOS | INSCRIPCIONES POR PASES (Nuevo procedimiento)</h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para registrar inscripciones por pases en SIEP entre una institución origen (IO) y una institución destino (ID): </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Verificación de Baja en la IO": Desde el menú ALTA DE PERSONAS, indicar en "BÚSQUEDA" un alumno y luego click en el botón "BUSCAR". </li>
	    <li class="list-group-item">2º PASO | "Alta de inscripción por pase": Completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": (indicar el corriente ciclo lectivo)</li>
	    	<li>"Estado de la inscripción*": CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Mañana)</li>
	    	<li>"Tipo de inscripción*": Pase</li>
	    	<li>"Pase": (Indique IO)</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	    </li>
	    <li class="list-group-item">3º PASO | "Revisión de la inscripción recién registrada": verifique en "Datos de Alta" figure el nombre correcto de la IO.</li>
	  </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">PRIMARIO/SECUNDARIO | ADULTOS | INSCRIPCIONES GENERALES</h3>
	  </div>
	  <div class="panel-body">
	    <p> Se desarrollan durante todo el año <a href="https://drive.google.com/file/d/1Gf7qaDCpvdD8tRp_I4Cs6CIu98vr_U0I/view?usp=sharing" target="_blank"> (ABRIR Y DESCARGAR EL MODELO DE PLANILLA) </a>. La operatoria en SIEP incluye los siguiente pasos: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Alta de inscripción": Desde el menú ALUMNADO --> INSCRIPCIONES, click en el botón "+AGREGAR", completar los siguientes campos obligatorios como se indican a continuación:
	    <ul>
	    	<li>"Ciclo lectivo*": 2019</li>
	    	<li>"Estado de la inscripción*": NO CONFIRMADA</li>
	    	<li>"Nombre y apellidos del alumno*": (Indique el nombre del ingresante)</li>
	    	<li>"Sección*": (indique una sección sin división ej: 1ro Otro)</li>
	    	<li>"Tipo de inscripción*": Común</li>
	    	<li>Click en el botón "GUARDAR" (SIEP le mostrará el detalle de la inscripción registrada)</li>
	    </ul>	
	  </ul>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">PRIMARIO/SECUNDARIO | ADULTOS | PROMOCIONES </h3>
	  </div>
	  <div class="panel-body">
	    <p> A continuación se detallan los pasos a seguir para registrar PROMOCIONES en SIEP <a href="https://drive.google.com/file/d/1VsFgAyMFQuPrFP8uZiGYfHGqADrqtTHv/view?usp=sharing" target="_blank">(VER TAMBIÉN VIDEO TUTORIAL EN LÍNEA)</a>: </p>
	  </div>
	  <!-- List group -->
	  <ul class="list-group">
	    <li class="list-group-item">1º PASO | "Identificación de la sección origen ": Desde el menú OFERTAS --> SECCIONES, indicar en "BÚSQUEDA" una sección (sala/grado) origen y luego click en el botón "BUSCAR". </li>
	    <li class="list-group-item">2º PASO | "Ver el detalle de la sección": click en el botón VERDE de la tarjeta de la sección.	
	    </li>
	    <li class="list-group-item">3º PASO | "Promocionar a la sección destino": Desde "OPCIONES", click en el botón "Promocionar". Luego señalar en el listado el/los alumnos para ser promocionados e indicar en "OPCIONES DE PROMOCIÓN" la sección destino. Por último, click en el botón "Confirmar promoción".</li>
	  </ul>
	</div>
<?php endif; ?>	
</div>
