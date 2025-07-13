# 🌱 Planty - Site Vitrine WordPress

> Site vitrine pour une boisson 100% naturelle - Projet de formation

## 📋 Présentation du Projet

**Planty** est un site vitrine développé dans le cadre d'une formation WordPress. Il présente une startup proposant une boisson 100% naturelle avec une approche moderne et végétale.

### 🎯 Objectifs du Projet

1. **Respect pixel-perfect** des maquettes Figma
2. **Utilisation maximale d'Elementor** (approche no-code) et de ses extensions
3. **Site responsive** et facilement administrable

## 🚀 Technologies Utilisées

- **WordPress** - CMS
- **Elementor** + Ultimate Addons for Elementor - Construction no-code
- **Astra** - Thème parent
- **Astra Child** - Thème enfant pour personnalisations
- **PHP** - Hooks et fonctionnalités personnalisées
- **CSS** - Stylisation personnalisée
- **Git/GitHub** - Versionning et déploiement

## 📁 Structure du Projet

```
planty/
├── app/public/                    # Application WordPress
│   ├── wp-content/
│   │   ├── themes/
│   │   │   ├── astra/             # Thème parent
│   │   │   └── astra-child/       # Thème enfant (personnalisations)
│   │   └── plugins/               # Plugins WordPress
│   └── ...
├── conf/                          # Configuration environnement
└── logs/                          # Logs du serveur
```

## 🎨 Pages Développées

### 🏠 Page d'Accueil
- Section Hero avec canette et éléments végétaux
- Section des goûts avec visuels
- Section témoignages
- Bannière canettes (bas de page)

### 👥 Page "Nous Rencontrer"
- Bannière graphique avec titre et pictogramme
- Présentation de la startup
- Section équipe (Mégane CEO, Brooke Nutritionniste, Sylvie Mixologue)
- Formulaire de contact Elementor
- Footer végétal

## 📱 Responsive Design

Le site est optimisé pour :
- **Mobile** (≥ 320px)
- **Tablette** 
- **Desktop**

Adaptations spécifiques :
- Menu burger automatique sur mobile
- Grille d'équipe adaptative
- Formulaires responsive

## 🔧 Fonctionnalités Techniques

### Formulaires
- **Formulaire "Nous contacter"** - Page dédiée
- **Formulaire "Précommande"** - Intégré
- Adresse de destination : `planty.drinks@gmail.com`

### Hooks PHP
- Lien "Admin" conditionnel (visible uniquement aux utilisateurs connectés)
- Personnalisations thème enfant

### Gestion des Menus
- Menu principal administrable via `Apparence > Menus`
- Navigation responsive

## 🌿 Charte Graphique

- **Couleurs principales** : 
  - Beige : `#E9DDD0`
  - Vert Planty : `#C02E44`
  - Rose : `#E0B9B4`
- **Typographie** : Police Planty personnalisée
- **Éléments** : Pictogrammes de feuilles, arrondis, ambiance végétale

## 📊 Git & Versioning

### Branches
- `main` - Branche principale
- `page-accueil-v2` - Développement page d'accueil
- `page-nous-rencontrer` - Page équipe et contact

### Commits
Messages suivant les conventions :
- `feat:` - Nouvelles fonctionnalités
- `chore:` - Maintenance et nettoyage
- `fix:` - Corrections de bugs

## 🔗 Liens Utiles

- **Repository GitHub** : [Planty-wordpress](https://github.com/Nicognito23/Planty-wordpress)
- **Demo Live** : [À ajouter]

## 🛠️ Installation & Développement

### Prérequis
- WordPress 6.x
- PHP 8.x
- Elementor Pro
- Ultimate Addons for Elementor

### Setup Local
```bash
# Cloner le repository
git clone https://github.com/Nicognito23/Planty-wordpress.git

# Configurer WordPress
# Importer la base de données
# Activer les plugins requis
```

## 📈 Performances & Optimisations

- **CSS/JS minifiés** via Elementor
- **Images optimisées** pour le web
- **Caching** configuré
- **SEO** optimisé avec structure appropriée

## 👨‍💻 Développeur

**Nicolas Raux**  
Projet réalisé dans le cadre d'une formation WordPress

---

*Développé avec ❤️ et beaucoup de ☕* 