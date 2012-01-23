<?php

/**
 * iceModelShortUrl form base class.
 *
 * @method iceModelShortUrl getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelShortUrlForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'url'         => new sfWidgetFormTextarea(),
      'url_decoded' => new sfWidgetFormTextarea(),
      'hash'        => new sfWidgetFormInputText(),
      'view_count'  => new sfWidgetFormInputText(),
      'is_public'   => new sfWidgetFormInputCheckbox(),
      'is_enabled'  => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'url'         => new sfValidatorString(array('required' => false)),
      'url_decoded' => new sfValidatorString(array('required' => false)),
      'hash'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'view_count'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'is_public'   => new sfValidatorBoolean(),
      'is_enabled'  => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ice_model_short_url[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelShortUrl';
  }


}
