<?php
/* Conceptualgrupos Test cases generated on: 2012-01-29 19:01:03 : 1327881663*/
App::uses('ConceptualgruposController', 'Controller');

/**
 * TestConceptualgruposController *
 */
class TestConceptualgruposController extends ConceptualgruposController {
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
 * ConceptualgruposController Test Case
 *
 */
class ConceptualgruposControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.conceptualgrupo', 'app.acta', 'app.trimestre', 'app.aprendice', 'app.barrio', 'app.ciudade', 'app.departamento', 'app.centro', 'app.ambiente', 'app.horarioadministrativo', 'app.grupo', 'app.versionespecialidade', 'app.especialidade', 'app.tipoformacione', 'app.instructoreespecialidade', 'app.instructore', 'app.vinculo', 'app.actainstructore', 'app.calificacione', 'app.resultadoaprendizaje', 'app.competencias', 'app.horario', 'app.calendarioacademico', 'app.competencia', 'app.competenciaversionespecialidade', 'app.horarioespeciale', 'app.resultadoproyecto', 'app.proyecto', 'app.inasistencia', 'app.planemejoramiento', 'app.contrato', 'app.tipocontrato', 'app.actagrupo', 'app.aprendicegrupo', 'app.acudienteaprendice', 'app.acudiente', 'app.aprendiceempresa', 'app.empresa', 'app.sectore', 'app.aprendicesolicitude', 'app.solicitude', 'app.conceptualaprendice', 'app.etapa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Conceptualgrupos = new TestConceptualgruposController();
		$this->Conceptualgrupos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conceptualgrupos);

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
