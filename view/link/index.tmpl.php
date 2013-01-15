<section class="grid_2" >
        <div class="with-margin">
            <a class="big button pink full-width" href="<?php eUrl('link','index'); ?>">Accueil</a>
        </div>
    </section>

    <section class="grid_4">
        <div class="with-big-margin">
            <a class="big button dark full-width" href="<?php eUrl('link','create'); ?>">Ajouter un Lien</a>
        </div>
    </section>

    <section class="grid_2">
        <div class="with-margin">
            <a class="big button dark full-width" href="<?php eUrl('user','index'); ?>"><?php echo $this->user ? 'Compte' : 'Login'; ?></a>
        </div>
    </section>
    </article>

    <article class="container_8 clearfix">
    <section class="grid_8">
        <h1>Tasty Tuesday</h1>
        
        <div class="with-margin clearfix">

		<?php if(count($this->links) == 0): ?>
		    <h1>0 Liens trouv&eacute;</h1>
		<?php else: ?>
		<?php foreach($this->links as $id => /*@var $link LinkModel*/ $link): ?>
				        
        <ul class="tasty-links">
        
        <li>
        	<img src="<?php echo $link->img; ?>" alt="preview" />
        	<dl>
        		<dt><?php echo $link->title; ?></dt>
        		<dd><a href="<?php echo $link->url; ?>"><?php echo $link->url; ?></a></dd>
        	</dl>
        </li>
                      	
       	<?php endforeach; ?>
       	
       	</ul>
       	
       	<?php endif; ?>
       	
        </div>

    </section>
    
