<!-- Hidden Google Translate Element -->
<div id="google_translate_element" style="display:none; position:absolute; z-index:-9999;"></div>

<style>
    /* Premium overrides to hide standard Google Translate banners and widgets */
    iframe.skiptranslate,
    .goog-te-banner-frame,
    .goog-te-banner,
    .goog-te-menu-value,
    .goog-te-menu-frame,
    #goog-gt-tt,
    .goog-te-balloon-frame {
        display: none !important;
        visibility: hidden !important;
    }
    body {
        top: 0px !important;
        position: static !important;
    }
    /* Disable Google Translate tooltips & highlight effects */
    .goog-tooltip, .goog-tooltip:hover {
        display: none !important;
    }
    .goog-text-highlight {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
    /* Scoped language translator dropdown item styling */
    .lang-dropdown-item {
        color: rgba(255, 255, 255, 0.75) !important;
        transition: all 0.2s ease-in-out !important;
        font-size: 0.85rem !important;
        border-radius: 6px !important;
        margin: 2px 8px !important;
    }
    .lang-dropdown-item:hover {
        color: #ffffff !important;
        background-color: rgba(255, 255, 255, 0.1) !important;
    }
</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
        
        // Polling to restore the language once the widget is initialized
        let checkComboInterval = setInterval(function() {
            const select = document.querySelector('select.goog-te-combo');
            if (select) {
                clearInterval(checkComboInterval);
                restoreLanguageUI();
            }
        }, 150);
        
        // Timeout after 5 seconds to prevent infinite loop if Google Translate fails
        setTimeout(function() {
            clearInterval(checkComboInterval);
        }, 5000);
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
    const languagesConfig = {
        'en': { name: 'English', flag: '🇺🇸' },
        'es': { name: 'Español', flag: '🇪🇸' },
        'de': { name: 'Deutsch', flag: '🇩🇪' },
        'fr': { name: 'Français', flag: '🇫🇷' },
        'it': { name: 'Italiano', flag: '🇮🇹' },
        'ru': { name: 'Русский', flag: '🇷🇺' },
        'pt': { name: 'Português', flag: '🇵🇹' },
        'zh-CN': { name: '简体中文', flag: '🇨🇳' },
        'ja': { name: '日本語', flag: '🇯🇵' },
        'ko': { name: '한국어', flag: '🇰🇷' },
        'ar': { name: 'العربية', flag: '🇸🇦' },
        'tr': { name: 'Türkçe', flag: '🇹🇷' },
        'nl': { name: 'Nederlands', flag: '🇳🇱' },
        'pl': { name: 'Polski', flag: '🇵🇱' },
        'sv': { name: 'Svenska', flag: '🇸🇪' },
        'no': { name: 'Norsk', flag: '🇳🇴' },
        'da': { name: 'Dansk', flag: '🇩🇰' },
        'fi': { name: 'Suomi', flag: '🇫🇮' },
        'el': { name: 'Ελληνικά', flag: '🇬🇷' },
        'hi': { name: 'हिन्दी', flag: '🇮🇳' },
        'bn': { name: 'বাংলা', flag: '🇧🇩' },
        'vi': { name: 'Tiếng Việt', flag: '🇻🇳' },
        'th': { name: 'ไทย', flag: '🇹🇭' },
        'id': { name: 'Bahasa Indonesia', flag: '🇮🇩' },
        'uk': { name: 'Українська', flag: '🇺🇦' },
        'ro': { name: 'Română', flag: '🇷🇴' },
        'hu': { name: 'Magyar', flag: '🇭🇺' },
        'cs': { name: 'Čeština', flag: '🇨🇿' },
        'ms': { name: 'Bahasa Melayu', flag: '🇲🇾' },
        'tl': { name: 'Filipino', flag: '🇵🇭' },
        'sw': { name: 'Kiswahili', flag: '🇰🇪' }
    };

    function translateLanguage(langCode, langName, langFlag) {
        // Set cookies for Google Translate (both main domain and path specific)
        const hostname = window.location.hostname;
        const mainDomain = hostname.substring(hostname.lastIndexOf(".", hostname.lastIndexOf(".") - 1) + 1);
        
        document.cookie = "googtrans=/en/" + langCode + "; path=/; domain=" + hostname;
        document.cookie = "googtrans=/en/" + langCode + "; path=/; domain=." + mainDomain;
        document.cookie = "googtrans=/en/" + langCode + "; path=/";
        
        // Store language selection in localStorage
        localStorage.setItem('selectedLanguageCode', langCode);
        localStorage.setItem('selectedLanguageName', langName);
        localStorage.setItem('selectedLanguageFlag', langFlag);

        // Update selector elements immediately on page
        updateSelectorUI(langFlag, langName);

        // Trigger Google Translate dropdown
        const select = document.querySelector('select.goog-te-combo');
        if (select) {
            select.value = langCode;
            select.dispatchEvent(new Event('change'));
        } else {
            // Fallback reload
            window.location.reload();
        }
    }

    function updateSelectorUI(flag, name) {
        // Update all elements matching the classes
        const flagElements = document.querySelectorAll('.current-lang-flag');
        const nameElements = document.querySelectorAll('.current-lang-name');
        
        flagElements.forEach(el => el.textContent = flag);
        nameElements.forEach(el => el.textContent = name);
    }

    function restoreLanguageUI() {
        const savedLang = localStorage.getItem('selectedLanguageCode');
        if (savedLang && languagesConfig[savedLang]) {
            const config = languagesConfig[savedLang];
            updateSelectorUI(config.flag, config.name);
            
            // Re-apply cookie if missing
            const hostname = window.location.hostname;
            document.cookie = "googtrans=/en/" + savedLang + "; path=/; domain=" + hostname;
            document.cookie = "googtrans=/en/" + savedLang + "; path=/";

            const select = document.querySelector('select.goog-te-combo');
            if (select && select.value !== savedLang) {
                select.value = savedLang;
                select.dispatchEvent(new Event('change'));
            }
        }
    }
    
    // Populate all language dropdowns dynamically on the page
    document.addEventListener('DOMContentLoaded', function() {
        const menus = document.querySelectorAll('.lang-dropdown-menu');
        menus.forEach(menu => {
            menu.innerHTML = ''; // Clear hardcoded items
            const isUl = menu.tagName.toLowerCase() === 'ul';
            
            Object.keys(languagesConfig).forEach(code => {
                const lang = languagesConfig[code];
                const a = document.createElement('a');
                a.className = 'dropdown-item lang-dropdown-item d-flex align-items-center gap-2 py-2 px-3';
                a.href = 'javascript:void(0);';
                a.onclick = function() {
                    translateLanguage(code, lang.name, lang.flag);
                };
                a.innerHTML = `<span>${lang.flag}</span> <span class="align-middle">${lang.name}</span>`;
                
                if (isUl) {
                    const li = document.createElement('li');
                    li.appendChild(a);
                    menu.appendChild(li);
                } else {
                    menu.appendChild(a);
                }
            });
        });
    });

    // Immediate UI restoration from localStorage to prevent flash of English
    (function() {
        const savedLang = localStorage.getItem('selectedLanguageCode');
        if (savedLang && languagesConfig[savedLang]) {
            const config = languagesConfig[savedLang];
            // Wait for DOM to load selectors
            document.addEventListener('DOMContentLoaded', function() {
                updateSelectorUI(config.flag, config.name);
            });
        }
    })();
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '9e74d6c000fe9341112b2855a80c0178659c7aec';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>
