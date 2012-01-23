<?php

/**
 * iceModelShortUrlHit form base class.
 *
 * @method iceModelShortUrlHit getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelShortUrlHitForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'short_url_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelShortUrl', 'add_empty' => false)),
      'session_id'   => new sfWidgetFormInputText(),
      'ip_address'   => new sfWidgetFormInputText(),
      'referrer'     => new sfWidgetFormInputText(),
      'is_mobile'    => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'short_url_id' => new sfValidatorPropelChoice(array('model' => 'iceModelShortUrl', 'column' => 'id')),
      'session_id'   => new sfValidatorString(array('max_length' => 32)),
      'ip_address'   => new sfValidatorString(array('max_length' => 15)),
      'referrer'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_mobile'    => new sfValidatorBoolean(),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_short_url_hit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelShortUrlHit';
  }


}
