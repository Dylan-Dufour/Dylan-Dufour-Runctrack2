SELECT salles.nom AS salle,etage.nom AS etage FROM `salles`
JOIN etage ON salles.id_etage= etage.id