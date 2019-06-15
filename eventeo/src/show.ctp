<?php if ($site->type != 3): ?>
    <?= $this->cell('Slide', [$site->type], ['cache' => ['key' => 'cell_app_view_cell_slider_' . $site->type]]); ?>
<?php endif; ?>
<section id="breadcrumb">
  <div class="container">
    <div class="col-md-12">
      <div class="breadcrumb-title">
        <h1><?php echo $site['title']; ?></h1>
      </div>
    </div>
  </div>
</section>
<section id="flash">
  <div class="container">
    <div class="col-md-12">
      <?= $this->Flash->render() ?>
    </div>
  </div>
</section>
<section id="page-content">
  <div itemscope itemtype="http://schema.org/LocalBusiness" class="container">       
    <?= $site['smart_body']; ?>   
    <div class="clearfix"></div>
  </div>
</section>
<section id="contact-form">
    <div class="container">
        <div class="col-md-12"><h1>Formularz kontaktowy</h1></div>
        <div class="col-md-6">
            <?php 
                echo $this->Form->create($contact);
                echo $this->Form->input('name', ['placeholder'=> 'Imię', 'class'=>'form-contact-btn', 'label' => false]);
                echo $this->Form->input('contact', ['placeholder'=> 'E-mail lub numer telefonu', 'class'=>'form-contact-btn', 'label' => false]);
                echo $this->Form->input('title', ['placeholder'=> 'Temat', 'class'=>'form-contact-btn', 'label' => false, 'value'=>false]);
                echo $this->Form->input('body', ['placeholder'=> 'Treść wiadomości', 'class'=>'form-contact-btn body', 'label' => false]);
                echo $this->Form->button('Wyślij', ['name'=> 'submit', 'class'=>'form-submit-btn', 'label' => false]);
                echo $this->Form->end();
            ?>
        </div>
        <div class="col-md-6">
            <h4>Zostaw swoje dane, a skontaktuję się z Tobą i dobiorę dla Ciebie najlepszą ofertę. Przy bezpośrednim kontakcie z agentem otrzymasz najlepsze warunki ubezpieczenia. </h4>
        </div>
    </div>
</section>
<section id="page-info">
    <div class="container">
        <div class="col-md-4">
            <div class="page-info-box">
                <div class="page-info-box-image time"><p><span class="count" data-from="1" data-to="10" data-decimals="0" data-speed="1200" data-addon="">10</span> lat doświadczenia w dostarczaniu ubezpieczeń</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-info-box">
                <div class="page-info-box-image home"><p>Ponad <span class="count" data-from="1" data-to="1000" data-decimals="0" data-speed="1000" data-addon="">1000</span> zadowolonych klientów</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-info-box">
                <div class="page-info-box-image price"><p>Promocyjne ceny</p></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>