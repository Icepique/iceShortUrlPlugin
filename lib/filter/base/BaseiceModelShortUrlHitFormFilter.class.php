<?php

/**
 * iceModelShortUrlHit filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelShortUrlHitFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'short_url_id' => new sfWidgetFormPropelChoice(array('model' => 'iceModelShortUrl', 'add_empty' => true)),
      'session_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ip_address'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'referrer'     => new sfWidgetFormFilterInput(),
      'is_mobile'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'short_url_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'iceModelShortUrl', 'column' => 'id')),
      'session_id'   => new sfValidatorPass(array('required' => false)),
      'ip_address'   => new sfValidatorPass(array('required' => false)),
      'referrer'     => new sfValidatorPass(array('required' => false)),
      'is_mobile'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_short_url_hit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelShortUrlHit';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'short_url_id' => 'ForeignKey',
      'session_id'   => 'Text',
      'ip_address'   => 'Text',
      'referrer'     => 'Text',
      'is_mobile'    => 'Boolean',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
