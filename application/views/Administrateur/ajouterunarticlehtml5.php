<h2><?php echo $TitreDeLaPage ?></h2>
 
<?php
 
echo form_open('administrateur/ajouterUnArticleHTML5');
 
echo form_label("Titre du produit:",'lblTitre');
echo form_input('txtTitre','',array('pattern' =>'[a-zA-Z ]*','required'=>'required', 'title'=>'Saisir des lettres uniquement')).'<BR>';
 
echo form_label("Marque du produit :",'lblMarque');
echo form_input('txtMarque','',array('pattern' =>'[a-zA-Z ]*','required'=>'required', 'title'=>'Saisir des lettres uniquement')).'<BR>';

echo form_label("Type de produit :",'lbltype');
echo form_input('txtType','',array('pattern' =>'[a-zA-Z ]*','required'=>'required', 'title'=>'Saisir des lettres uniquement')).'<BR>';

echo form_label("Catégorie du produit :",'lblCategorie');
echo form_input('txtCategorie','',array('pattern' =>'[a-zA-Z ]*','required'=>'required', 'title'=>'Saisir des lettres uniquement')).'<BR>';

echo form_label("Prix du produit HT:",'lblPrix');
echo form_input('txtPrix','',array('pattern' =>'[0-9,.]*','required'=>'required', 'title'=>'Saisir XX,XX ou XX.XX')).'<BR>';

echo form_label("Taux TVA du produit:",'lblTVA');
echo form_input('txtTVA','',array('pattern' =>'[0-9,.]*','required'=>'required', 'title'=>'Saisir X,XX ou X.XX')).'<BR>';

echo form_label("Date d'ajout produit:",'lblDate');
echo form_input('txtDate','',array('pattern' =>'[0-9/]*','required'=>'required', 'title'=>'Saisir JJ/MM/AAAA')).'<BR>';

echo form_label("Quantité en stock disponible:",'lblQuantite');
echo form_input('txtQuantite','',array('pattern' =>'[0-9]*','required'=>'required', 'title'=>'Saisir nombre entier. (ex:200)')).'<BR>';

echo form_label("Détails du produit : ", 'lblTexte');
echo form_textarea('txtTexte', '',array('required'=>'required')).'<BR>';
 
echo form_label('Nom du fichier image : ','lblNomFichierImage');
echo form_input('txtNomFichierImage', '',array('pattern'=>'^[a-zA-Z][a-zA-Z0-9]*','title'=>'Un nom de fichier doit commencer par une lettre', 'required'=>'required')).'<BR>';
 
echo form_submit('boutonAjouter', 'Ajouter un article').'<BR>';
echo form_close();
 
?>