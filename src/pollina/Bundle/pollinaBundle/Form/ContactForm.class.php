<?
class ContactForm extends sfForm
{
    public function configure()
    {
        $this->setWidgets(array(
            'name'    => new sfWidgetFormInput(),
            'email'   => new sfWidgetFormInput(),
            'message' => new sfWidgetFormTextarea(),
        ));
    }
}