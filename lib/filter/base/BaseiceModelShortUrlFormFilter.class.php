<?php

/**
 * iceModelShortUrl filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelShortUrlFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'         => new sfWidgetFormFilterInput(),
      'url_decoded' => new sfWidgetFormFilterInput(),
      'hash'        => new sfWidgetFormFilterInput(),
      'view_count'  => new sfWidgetFormFilterInput(),
      'is_public'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_enabled'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'url'         => new sfValidatorPass(array('required' => false)),
      'url_decoded' => new sfValidatorPass(array('required' => false)),
      'hash'        => new sfValidatorPass(array('required' => false)),
      'view_count'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_public'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_enabled'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_short_url_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelShortUrl';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'url'         => 'Text',
      'url_decoded' => 'Text',
      'hash'        => 'Text',
      'view_count'  => 'Number',
      'is_public'   => 'Boolean',
      'is_enabled'  => 'Boolean',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
