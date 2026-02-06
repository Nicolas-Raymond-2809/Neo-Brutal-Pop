Product Requirements Document (PRD) : Thème WP "Neo-Brutal Pop"
1. Informations Générales du Projet
Champ
Détails
Nom du Produit
Thème WordPress "Neo-Brutal Pop"
Statut
En cours de définition (Draft)
Type de projet
Thème complet (FSE ou Classique)
Lead Developer
Vous (assisté par l'agent Jules)
Design Reference
8290662.jpg (Esthétique Windows 95 / Memphis)
2. Contexte et Vision
Description : Création d'un thème WordPress au style "Néo-Brutalisme" affirmé. Le design s'inspire des interfaces graphiques des années 90 (barres de fenêtres, onglets dossiers) mélangées à des couleurs pop saturées. Pourquoi ? Pour offrir une alternative radicale au minimalisme standard ("Corporate Memphis") et permettre aux créateurs de contenu d'avoir une identité visuelle forte et nostalgique.
3. Objectifs et Indicateurs de Succès
• [ ] Avoir un thème fonctionnel installable sur WordPress.
• [ ] Respecter fidèlement la maquette visuelle (bordures épaisses, ombres dures).
• [ ] Score de performance Lighthouse > 90 (malgré les éléments graphiques).
• [ ] Intégration réussie des Google Fonts spécifiques (VT323 et Roboto Condensed).
4. Personas
• Persona A (Le Créatif) : Un designer ou blogueur qui veut un site portfolio qui ressemble à un vieil OS informatique mais avec des couleurs modernes.
5. Fonctionnalités et User Stories (Le "Quoi")
C'est ici que nous définissons les instructions pour le développement futur par Jules.
Fonctionnalité 1 : Socle technique et Typographie
• User Story : En tant que visiteur, je veux voir des polices qui évoquent le code et l'industrie.
• Critères d'acceptation :
    ◦ Le thème charge Roboto Condensed (auteur: Christian Robertson) pour les textes de paragraphe.
    ◦ Le thème charge VT323 (auteur: Peter Hull) pour les titres (H1-H6) et les éléments de type "code".
    ◦ La normalisation CSS est appliquée.
Fonctionnalité 2 : Identité Visuelle "Néo-Brutal" (Global Styles)
• User Story : En tant qu'utilisateur, je veux une interface vibrante et contrastée.
• Critères d'acceptation :
    ◦ Background général : Rose (#FF90E8 estimé d'après).
    ◦ Couleurs d'accent : Jaune vibrant, Cyan, Orange, Bleu foncé.
    ◦ Règle stricte : Tous les conteneurs doivent avoir une bordure noire solide de 3px ou 4px (border: 3px solid black).
    ◦ Règle stricte : Les ombres portées doivent être "dures" sans flou (ex: box-shadow: 5px 5px 0px 0px #000) pour l'effet 2D.
Fonctionnalité 3 : Composant "Fenêtre Rétro" (Container)
• User Story : En tant qu'éditeur, je veux afficher mon contenu dans des blocs ressemblant à des fenêtres de système d'exploitation.
• Critères d'acceptation :
    ◦ Le bloc principal a un fond blanc et une bordure noire.
    ◦ Une "Title Bar" (barre de titre) en haut du bloc (fond bleu ou cyan) contient le titre de la section et une icône "X" (fermeture) décorative à droite.
Fonctionnalité 4 : Navigation "Dossier"
• User Story : En tant qu'utilisateur, je navigue via un menu ressemblant à des onglets physiques.
• Critères d'acceptation :
    ◦ Le menu principal (Header) présente les liens (Menu, About Us, Shop) séparés par des traits verticaux noirs, sur fond jaune.
    ◦ Effet de survol (Hover) : Changement de couleur de fond brutal (pas de transition douce).
Fonctionnalités exclues (Out of Scope) :
• Animations 3D complexes (WebGL).
• Mode sombre (le thème est par nature coloré/clair).
6. Design et Expérience Utilisateur (UX)
Lien vers les maquettes : Se référer à l'image source 8290662.jpg. Éléments graphiques clés :
• Utilisation de formes géométriques décoratives en CSS ou SVG : Croix ("X"), Étoiles ("sparkles"), Lignes ondulées ("squiggles").
• Boutons : Rectangulaires, texte majuscule (font VT323), ombre noire décalée.
7. Critères de Lancement
• Performance : Temps de chargement < 2 secondes.
• Responsive : Les "fenêtres" doivent s'empiler proprement sur mobile (les bordures restent visibles mais s'adaptent).
