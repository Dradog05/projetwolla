-- =================================================================
-- 2 petites views
-- Vous pouvez utiliser les deux vues suivantes dans votre projet.
-- Chut. Ne pas en parler si vous avez vu que je vous offre 2 cadeaux ...
-- C'est un test !
-- =================================================================

create or replace view infocreneaux as
select CR.id as creneau_id, PJ.id as projet_id, PJ.label, EX.id as examinateur_id, EX.nom, EX.prenom, CR.creneau, PJ.groupe
from creneau CR, projet PJ, personne EX
where CR.projet = PJ.id and CR.examinateur = EX.id;


create or replace view infordv as
select R.ID as rdv_id, P.id as projet_id, P.label as projet_label, 
       EX.ID as examinateur_id, EX.nom as examinateur_nom, EX.prenom as examinateur_prenom, 
       R.creneau as creneau_id, ET.ID as etudiant_id, ET.nom as etudiant_nom, ET.prenom as etudiant_prenom, 
       C.creneau 
from rdv R, creneau C, personne ET, projet P, personne EX
where R.creneau = C.id and R.etudiant = ET.id and C.projet = P.id and C.examinateur = EX.id;
