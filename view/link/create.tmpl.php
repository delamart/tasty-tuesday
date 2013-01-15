    <section class="grid_2">
        <div class="with-margin">
            <a class="big button dark full-width" href="<?php eUrl('link','index'); ?>">Accueil</a>
        </div>
    </section>

    <section class="grid_4">
        <div class="with-big-margin">
            <a class="big button pink full-width" href="<?php eUrl('link','index'); ?>">Retour aux Liens</a>
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
        
        <form action="<?php eUrl('link','create'); ?>" method="post" class="challenge-form">
            <h1>Nouveau Lien</h1>
            
            <?php if(count($this->errors)): ?>
            <div class="with-margin error">
                <ul>
                <?php foreach($this->errors as $error) echo "<li>$error</li>"; ?>    
                </ul>
            </div>
            <?php endif; ?>
            
            <fieldset class="with-margin">
				<div class="input-line double with-margin">
				    <label for="additional">Addresse</label> 
				    <textarea id="additional" name="additional" cols="42" rows="3" placeholder="http://www.example.com" ><?php echo $this->link->url; ?></textarea>
				</div>
            </fieldset>
            
            <button class="big button green full-width" type="submit">Cr&eacute;er ce nouveau Lien</button>
        </form>
        
    </section>
    