<?php
/* Sectores Test cases generated on: 2012-01-29 19:04:31 : 1327881871*/
App::uses('SectoresController', 'Controller');

/**
 * TestSectoresController *
 */
class TestSectoresController extends SectoresController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * SectoresController Test Case
 *
 */
class SectoresControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sectore', 'app.empresa', 'app.aprendiceempresa', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.acta', 'app.trimestre', 'app.etapa', 'app.actagrupo', 'app.aprendicesolicitude', 'app.solicitude', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoproyecto', 'app.proyecto', 'app.inasistencia', 'app.planemejoramiento', 'app.conceptualaprendice', 'app.conceptualgrupo', 'app.contrato', 'app.tipocontrato', 'app.aprendicegrupo', 'app.acudienteaprendice', 'app.acudiente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sectores = new TestSectoresController();
		$this->Sectores->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sectores);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
