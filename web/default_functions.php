<?php

function loadMenu($language)
{
    $tabLanguage = array();
    switch($language){
        case "FR":
            $tabLanguage['compagny'] = "L'ENTREPRISE";
            $tabLanguage['business'] = "NOS MÉTIERS";
            $tabLanguage['contact'] = "CONTACT";
            $tabLanguage['customerarea'] = "ESPACE CLIENT";
            $tabLanguage['follow'] = "SUIVEZ-NOUS";
            $tabLanguage['informed'] = "RESTEZ INFORMÉ";
            $tabLanguage['informedText'] = "Abonnez-vous à notre newsletter et restez informé de l’actualité de Pollina Imprimerie";
            $tabLanguage['compagnyMin'] = "L'entreprise";
            $tabLanguage['businessMin'] = "Nos métiers";
            $tabLanguage['contactMin'] = "Contact";
            $tabLanguage['customerareaMin'] = "Espace client";
            $tabLanguage['legalNotice'] = "Mention légale";
            $tabLanguage['sitemap'] = "Plan du site";
            $tabLanguage['textPrint'] = "Votre imprimeur agit pour l'environement ";
            $tabLanguage['mail'] = "Votre e-mail";
            break;
        case "EN":
            $tabLanguage['compagny'] = "THE COMPAGNY";
            $tabLanguage['business'] = "OUR BUSINESS";
            $tabLanguage['contact'] = "CONTACT";
            $tabLanguage['customerarea'] = "CUSTOMER AREA";
            $tabLanguage['follow'] = "FOLLOW US";
            $tabLanguage['informed'] = "STAY INFORMED";
            $tabLanguage['informedText'] = "Subscribe to our newsletter and stay informed of news Imprimerie Pollina";
            $tabLanguage['compagnyMin'] = "The compagny";
            $tabLanguage['businessMin'] = "Our business";
            $tabLanguage['contactMin'] = "Contact";
            $tabLanguage['customerareaMin'] = "Customer area";
            $tabLanguage['legalNotice'] = "legal notice";
            $tabLanguage['sitemap'] = "Sitemap";
            $tabLanguage['textPrint'] = "Your printer is for the environment";
            $tabLanguage['mail'] = "Your E-Mail";
            break;

        case "GE":
            $tabLanguage['compagny'] = "DAS UNTERNEHMEN";
            $tabLanguage['business'] = "UNSER GESCHAFT";
            $tabLanguage['contact'] = "KONTAKT";
            $tabLanguage['customerarea'] = "KUNDENBEREICH";
            $tabLanguage['follow'] = "FOLLOW US";
            $tabLanguage['informed'] = "BLEIBEN SIE INFORMIET";
            $tabLanguage['informedText'] = "Abonnieren Sie unseren Newsletter und News Imprimerie Pollina informiert bleiben";
            $tabLanguage['compagnyMin'] = "Das unternehmen";
            $tabLanguage['businessMin'] = "Unser geschaft";
            $tabLanguage['contactMin'] = "Kontakt";
            $tabLanguage['customerareaMin'] = "Kundenbereich";
            $tabLanguage['legalNotice'] = "Rechtliche Hinweise";
            $tabLanguage['sitemap'] = "Sitemap";
            $tabLanguage['textPrint'] = "Der Drucker ist für die Umwelt";
            $tabLanguage['mail'] = "Ihre E-Mail";

            break;

    }

    return $tabLanguage;

}


