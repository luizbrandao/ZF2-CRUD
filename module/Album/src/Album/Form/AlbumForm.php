<?php

namespace Album\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class AlbumForm extends Form {
	public function __construct($name = null){
		parent::__construct('album');
		$this->setAttribute('method','post');
		$this->setAttribute('class','form-horizontal');

		$this->add(array(
				'name' => 'id',
				'attributes' => array(
						'type' => 'hidden',
				),
		));

		$title = new Element\Text('title');
		$title->setLabel('Title')
			  ->setAttribute('id','title')
			  ->setLabelAttributes(array('class'=>'control-label'));
		$this->add($title);

		$artist = new Element\Text('artist');
		$artist->setLabel('Artist')
			   ->setAttribute('id','artist')
			   ->setLabelAttributes(array('class' => 'control-label'));
		$this->add($artist);

		$this->add(array(
				'name' => 'submit',
				'attributes' => array(
						'type' => 'submit',
						'value' => 'Go',
						'id' => 'submitbutton',
						'class' => 'btn btn-success',
				),
		));
	}
}
