<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Dominio Active Directory',
    'ad_domain_help'			=> 'Questo a volte è lo stesso del dominio email, ma non sempre.',
    'ad_append_domain_label'    => 'Aggiungi il dominio',
    'ad_append_domain'          => 'Aggiungi il dominio al campo username',
    'ad_append_domain_help'     => 'L\'utente non è tenuto a scrivere "username@domain.local", può semplicemente digitare "username".',
    'admin_cc_email'            => 'Email CC',
    'admin_cc_email_help'       => 'Se desideri inviare una copia delle e-mail di consegna / ritiro che vengono inviate agli utenti a un altro account e-mail, inseriscile qui. Altrimenti, lascia questo campo vuoto.',
    'admin_settings'            => 'Impostazioni Admin',
    'is_ad'				        => 'Si tratta di un server Active Directory',
    'alerts'                	=> 'Avvisi',
    'alert_title'               => 'Aggiorna impostazioni di notifica',
    'alert_email'				=> 'Invia avvisi a',
    'alert_email_help'    => 'Indirizzi email o liste di distribuzione a cui si desidera inviare gli avvisi, separati da una virgola',
    'alerts_enabled'			=> 'Attiva Avvisi',
    'alert_interval'			=> 'Soglia di avviso di scadenza (in giorni)',
    'alert_inv_threshold'		=> 'Soglia di avviso di inventario',
    'allow_user_skin'           => 'Consenti tema utente',
    'allow_user_skin_help_text' => 'Selezionando questa casella, l\'utente potrà sovrascrivere il tema dell\'interfaccia utente con uno diverso.',
    'asset_ids'					=> 'ID Bene',
    'audit_interval'            => 'Intervallo di controllo',
    'audit_interval_help'       => 'Se controllate fisicamente e periodicamente i vostri beni, inserite l\'intervallo in mesi utilizzato. Se si aggiorna questo valore, tutte le "prossime date di revisione" per i beni con una data di revisione saranno aggiornate.',
    'audit_warning_days'        => 'Soglia di allarme di controllo',
    'audit_warning_days_help'   => 'Quanti giorni in anticipo dovremmo avvisare quando i beni sono dovuti per il controllo?',
    'auto_increment_assets'		=> 'Genera tag beni ad incremento automatico',
    'auto_increment_prefix'		=> 'Prefisso (Opzionale)',
    'auto_incrementing_help'    => 'Attiva i tag beni ad incremento automatico per impostarlo',
    'backups'					=> 'Backups',
    'backups_help'              => 'Crea, scarica e ripristina i backup ',
    'backups_restoring'         => 'Ripristino da backup',
    'backups_upload'            => 'Carica Backup',
    'backups_path'              => 'I backup sul server sono memorizzati in <code>:path</code>',
    'backups_restore_warning'   => 'Usa il pulsante di ripristino <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> per ripristinare un backup precedente. (Al momento non funziona con l\'archivio file S3 o Docker.)<br><br><strong>L\'intero database di :app_name e i file caricati saranno completamente sostituiti</strong> dal contenuto nel file di backup.  ',
    'backups_logged_out'         => 'Tutti gli utenti esistenti, te incluso, saranno disconnessi a ripristino completato.',
    'backups_large'             => 'I backup molto grandi potrebbero andare in time out durante il ripristino e potrebbero dover essere eseguiti tramite riga di comando. ',
    'barcode_settings'			=> 'Impostazioni codice a barre',
    'confirm_purge'			    => 'Conferma Cancellazione',
    'confirm_purge_help'		=> 'Inserisci il testo "DELETE" nella casella sottostante per eliminare i tuoi record eliminati. Questa azione non può essere annullata e cancellerà PERMANENTEMENTE tutti gli elementi e gli utenti. (Effettuare un backup, per essere sicuri.)',
    'custom_css'				=> 'CSS Personalizzato',
    'custom_css_help'			=> 'Inserisci qualsiasi CSS personalizzato che vuoi utilizzare. Do not include the &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'URL di Reset Password personalizzata',
    'custom_forgot_pass_url_help'	=> 'Sostituisce l\'URL della password dimenticata incorporata nella schermata di accesso, utile per indirizzare le persone alla funzionalità di ripristino della password LDAP interna o ospitata. Disabiliterà completamente la funzionalità della password dimenticata dell\'utente locale.',
    'dashboard_message'			=> 'Messaggio di dashboard',
    'dashboard_message_help'	=> 'Questo testo verrà visualizzato nella dashboard per chiunque abbia il permesso di visualizzare il dashboard.',
    'default_currency'  		=> 'Valuta predefinita',
    'default_eula_text'			=> 'EULA Predefinita',
    'default_language'			=> 'Lingua predefinita',
    'default_eula_help_text'	=> 'È possibile associare EULAs personalizzati a categorie di beni specifici.',
    'acceptance_note'           => 'Aggiungi una nota alla tua decisione (facoltativo)',
    'display_asset_name'        => 'Mostra Nome Bene',
    'display_checkout_date'     => 'Mostra Data Estrazione',
    'display_eol'               => 'Visualizzare EOL in vista tabella',
    'display_qr'                => 'Visualizza codici quadrati',
    'display_alt_barcode'		=> 'Visualizza codici a barre',
    'email_logo'                => 'Logo Email',
    'barcode_type'				=> 'Tipo di codice a barre 2D',
    'alt_barcode_type'			=> 'Tipo di codice a barre 1D',
    'email_logo_size'       => 'I loghi quadrati nelle email hanno un aspetto migliore. ',
    'enabled'                   => 'Abilitato',
    'eula_settings'				=> 'Impostazioni EULA',
    'eula_markdown'				=> 'Questa EULA consente <a href="https://help.github.com/articles/github aromatizzato-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'I tipi di file accettati sono ico, png e gif. Altri formati potrebbero non funzionare in tutti i browser.',
    'favicon_size'          => 'Le Favicons dovrebbero essere preferibilmente quadrate, di dimensione 16x16 pixel.',
    'footer_text'               => 'Ulteriori testo di piè di pagina ',
    'footer_text_help'          => 'Questo testo verrà visualizzato nel piè di pagina destro. I collegamenti sono consentiti utilizzando <a href="https://help.github.com/articles/github-flavored-markdown/">markdown Github</a>. Le interruzioni di linea, le intestazioni, le immagini, ecc. Possono dare risultati imprevedibili.',
    'general_settings'			=> 'Impostazioni Generali',
    'general_settings_keywords' => 'supporto aziendale, firma, accettazione, formato email, formato username, immagini, per pagina, miniature, eula, gravatar, tos, cruscotto, privacy',
    'general_settings_help'     => 'EULA predefinita e altro',
    'generate_backup'			=> 'Crea Backup',
    'google_workspaces'         => 'Google Workspace',
    'header_color'              => 'Colore intestazione',
    'info'                      => 'Queste impostazioni consentono di personalizzare alcuni aspetti della vostra installazione.',
    'label_logo'                => 'Logo Etichetta',
    'label_logo_size'           => 'I loghi quadrati hanno un aspetto migliore - verranno visualizzati in alto a destra di ogni etichetta dell\'asset. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Gruppo Di Permessi Predefinito',
    'ldap_default_group_info'   => 'Seleziona un gruppo a cui assegnare i nuovi utenti. Ricorda che un utente ottiene le autorizzazioni del gruppo a cui appartiene.',
    'no_default_group'          => 'Nessun Gruppo Predefinito',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Chiave TLS client LDAP',
    'ldap_client_tls_cert'      => 'Certificato TLS Client LDAP',
    'ldap_enabled'              => 'LDAP abilitato',
    'ldap_integration'          => 'Integrazione LDAP',
    'ldap_settings'             => 'Impostazioni LDAP',
    'ldap_client_tls_cert_help' => 'Il Certificato e la Chiave TLS Client per le connessioni LDAP sono di solito richieste solo nelle configurazioni di Google Workspace con "Secure LDAP".',
    'ldap_location'             => 'Posizione LDAP',
'ldap_location_help'             => 'Il campo Posizione LDAP deve essere usato se <strong>una OU non viene utilizzata nella Base Bind DN</strong> Lascia vuoto se viene usata la ricerca OU.',
    'ldap_login_test_help'      => 'Immettere un nome utente e una password LDAP validi dal DN di base specificato in precedenza per verificare se il login LDAP è configurato correttamente. DEVI SALVARE LE IMPOSTAZIONI LDAP AGGIORNATE PRIMA.',
    'ldap_login_sync_help'      => 'Questo verifica solamente che LDAP possa sincronizzare correttamente. Se la tua query di autenticazione LDAP non è corretta, gli utenti potrebbero non essere ancora in grado di accedere. DEVI SALVARE LE IMPOSTAZIONI LDAP PRIMA DI EFFETTUARE QUESTO TEST.',
    'ldap_manager'              => 'Manager LDAP',
    'ldap_server'               => 'Server LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Validazione certificato SSL di LDAP',
    'ldap_server_cert_ignore'	=> 'Consenti Certificato SSL non valido',
    'ldap_server_cert_help'		=> 'Seleziona questa casella se stai utilizzando un certificato SSL autofirmato e vuoi accettare un certificato SSL non valido.',
    'ldap_tls'                  => 'Usa TLS',
    'ldap_tls_help'             => 'Questo dovrebbe essere controllato solo se si esegue STARTTLS sul server LDAP.',
    'ldap_uname'                => 'Nome utente LDAP',
    'ldap_dept'                 => 'Dipartimento LDAP',
    'ldap_phone'                => 'Numero di Telefono LDAP',
    'ldap_jobtitle'             => 'Titolo professionale LDAP',
    'ldap_country'              => 'Nazione LDAP',
    'ldap_pword'                => 'Password LDAP',
    'ldap_basedn'               => 'DN Base',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronizzazione password LDAP',
    'ldap_pw_sync_help'         => 'Deseleziona questa casella se non desideri mantenere le password LDAP sincronizzate con le password locali. Disattivare questo significa che i tuoi utenti potrebbero non essere in grado di accedere se il server LDAP non è raggiungibile per qualche motivo.',
    'ldap_username_field'       => 'Campo nome utente',
    'ldap_lname_field'          => 'Cognome',
    'ldap_fname_field'          => 'Nome LDAP',
    'ldap_auth_filter_query'    => 'Query di Autenticazione LDAP',
    'ldap_version'              => 'Versione LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Questo valore viene utilizzato per determinare se un utente sincronizzato può accedere a Snipe-IT. <strong>Non influisce sulla capacità di effettuare il check in o il checkout dei beni</strong>, e dovrebbe essere il <strong>nome dell\'attributo</strong> all\'interno del tuo AD/LDAP, <strong>non il valore</strong>. <br><br>Se questo campo è impostato su un nome di campo che non esiste nel tuo AD/LDAP, oppure il valore nel campo AD/LDAP è impostato su <code>0</code> o <code>false</code>, <strong>il login sarà disabilitato</strong>. Se il valore nel campo AD/LDAP è impostato a <code>1</code> o <code>true</code> o <em>qualsiasi altro testo</em> l\'utente può accedere. Quando il campo è vuoto nel tuo AD, rispettiamo l\'attributo <code>userAccountControl</code> , che di solito consente agli utenti non sospesi di accedere.',
    'ldap_emp_num'              => 'ID impiegato LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test Sincronizzazione Ldap',
    'license'                   => 'Licenza software',
    'load_remote'               => 'Carica Avatar Remoti',
    'load_remote_help_text'		=> 'Deseleziona questa casella se la tua installazione non può caricare gli script dall\'esterno. Questo impedirà a Snipe-IT di provare il caricamento degli avatar da Gravatar o da altre fonti esterne.',
    'login'                     => 'Tentativi di Accesso',
    'login_attempt'             => 'Tentativo di Accesso',
    'login_ip'                  => 'Indirizzo IP',
    'login_success'             => 'Successo?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'Elenco tentativi di login',
    'login_note'                => 'Nota di accesso',
    'login_note_help'           => 'Facoltativamente includere alcune frasi nella schermata di login, ad esempio per aiutare le persone che hanno trovato un dispositivo perso o rubato. Questo campo accetta <a href="https://help.github.com/articles/github-flavored-markdown/">Goodotto flavored markdown</a>',
    'login_remote_user_text'    => 'Opzioni di accesso utente remoto',
    'login_remote_user_enabled_text' => 'Abilita accesso con intestazione utente remota',
    'login_remote_user_enabled_help' => 'Questa opzione abilita l\'autenticazione tramite l\'intestazione REMOTE_USER in base alla "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disabilita altri meccanismi di autenticazione',
    'login_common_disabled_help' => 'Questa opzione disabilita altri meccanismi di autenticazione. Abilita questa opzione solo se sei sicuro che il tuo login REMOTE_USER sta già funzionando',
    'login_remote_user_custom_logout_url_text' => 'URL di logout personalizzato',
    'login_remote_user_custom_logout_url_help' => 'Se qui viene indicato un URL, gli utenti verranno reindirizzato a questo URL dopo essere usciti da Snipe-IT. Questo è utile per chiudere correttamente le sessioni dell\'utente.',
    'login_remote_user_header_name_text' => 'Intestazione del nome utente personalizzato',
    'login_remote_user_header_name_help' => 'Usa l\'intestazione specificata invece di REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usa in stampa',
    'logo_print_assets_help'    => 'Usa il brand sulla lista dei beni stampabili ',
    'full_multiple_companies_support_help_text' => 'Restringere gli utenti (amministratori inclusi) assegnati ad una azienda agli asset della propria azienda.',
    'full_multiple_companies_support_text' => 'Supporto completo ad aziende multiple',
    'show_in_model_list'   => 'Mostra in menu a discesa del modello',
    'optional'					=> 'facoltativo',
    'per_page'                  => 'Risultati per Pagina',
    'php'                       => 'PHP Version',
    'php_info'                  => 'Info PHP',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, informazioni',
    'php_overview_help'         => 'Informazioni di sistema PHP',
    'php_gd_info'               => 'È necessario installare php-gd per visualizzare i codici QR, consultare le istruzioni di installazione.',
    'php_gd_warning'            => 'Il plugin PHP Image Processing and GD non è installato.',
    'pwd_secure_complexity'     => 'Complicità di password',
    'pwd_secure_complexity_help' => 'Seleziona quale regola di complessità password desideri applicare.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'La password non può essere uguale a nome, cognome, email o nome utente',
    'pwd_secure_complexity_letters' => 'Richiedi almeno una lettera',
    'pwd_secure_complexity_numbers' => 'Richiedi almeno un numero',
    'pwd_secure_complexity_symbols' => 'Richiedi almeno un simbolo',
    'pwd_secure_complexity_case_diff' => 'Richiede almeno una lettera maiuscola e una minuscola',
    'pwd_secure_min'            => 'Caratteri minimi di password',
    'pwd_secure_min_help'       => 'Il valore minimo consentito è 8',
    'pwd_secure_uncommon'       => 'Impedire le password comuni',
    'pwd_secure_uncommon_help'  => 'Questo impedirà agli utenti di utilizzare le password comuni dalle prime 10.000 password segnalate in violazione.',
    'qr_help'                   => 'Abilita codici QR primo di impostare questo',
    'qr_text'                   => 'QR Code Text',
    'saml'                      => 'SAML',
    'saml_title'                => 'Aggiorna impostazioni SAML',
    'saml_help'                 => 'Impostazioni SAML',
    'saml_enabled'              => 'SAML attivo',
    'saml_integration'          => 'Integrazione SAML',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Certificato',
    'saml_sp_metadata_url'      => 'URL metadati',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'È possibile specificare i metadati IdP utilizzando un file URL o XML.',
    'saml_attr_mapping_username' => 'Mappatura Attributi - Username',
    'saml_attr_mapping_username_help' => 'Verrà utilizzato NameID se la mappatura degli attributi non è specificata o non è valida.',
    'saml_forcelogin_label'     => 'SAML obbligatorio',
    'saml_forcelogin'           => 'Imposta SAML come autenticazione principale',
    'saml_forcelogin_help'      => 'Puoi usare \'/login?nosaml\' per l\'autenticazione senza SAML.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Invia un LogoutRequest a IdP in caso di Logout',
    'saml_slo_help'             => 'Questo farà sì che l\'utente venga reindirizzato per primo all\'IdP al momento del logout. Deselezionare, se l\'IdP non supporta correttamente SAML SLO.',
    'saml_custom_settings'      => 'Impostazioni Personalizzate SAML',
    'saml_custom_settings_help' => 'È possibile specificare impostazioni aggiuntive alla libreria onelogin/php-saml. Utilizzare a proprio rischio.',
    'saml_download'             => 'Scarica Metadati',
    'setting'                   => 'Impostazioni',
    'settings'                  => 'Impostazioni',
    'show_alerts_in_menu'       => 'Mostra avvisi nel menu in alto',
    'show_archived_in_list'     => 'Risorse archiviate',
    'show_archived_in_list_text'     => 'Mostra le risorse archiviate nella lista "tutte le risorse"',
    'show_assigned_assets'      => 'Mostra gli asset assegnati agli asset',
    'show_assigned_assets_help' => 'Visualizza gli asset assegnati agli altri asset in Visualizza Utenti -> Assets, Visualizza Utenti -> Info -> Stampa assets assegnati e in Account -> Visualizza Asset assegnati.',
    'show_images_in_email'     => 'Mostra le immagini nelle e-mail',
    'show_images_in_email_help'   => 'Deseleziona questa casella se l\'installazione di Snipe-IT si trova dietro una rete VPN o chiusa e gli utenti esterni alla rete non saranno in grado di caricare le immagini fornite da questa installazione nelle loro e-mail.',
    'site_name'                 => 'Nome sito',
    'integrations'               => 'Integrazioni',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook Generale',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test da Salvare',
    'webhook_title'               => 'Aggiorna Impostazioni Webhook',
    'webhook_help'                => 'Impostazioni integrazione',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Canale',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Impostazioni',
    'webhook_test'                 =>'Prova integrazione :app',
    'webhook_integration_help'    => 'L\'integrazione con :app è facoltativa, ma se si desidera utilizzarla bisogna specificare l\'endpoint e il canale. Per configurare l\'integrazione devi <a href=":webhook_link" target="_new" rel="noopener">creare un webhook in arrivo</a> sul tuo account :app . Clicca su <strong>Prova integrazione :app</strong> per confermare che le impostazioni siano corrette prima di salvare. ',
    'webhook_integration_help_button'    => 'Una volta salvate le informazioni di :app, apparirà un pulsante di prova.',
    'webhook_test_help'           => 'Verifica se l\'integrazione :app è configurata correttamente. DEVI PRIMA SALVARE LE IMPOSTAZIONI :app AGGIORNATE.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Supporto per i collegamenti a piè di pagina ',
    'support_footer_help'       => 'Specificare chi vede i collegamenti alle informazioni sul supporto IT e su Snipe-IT',
    'version_footer'            => 'Versione a piè di pagina ',
    'version_footer_help'       => 'Specifica chi può vedere la versione di Snipe-IT e il numero di build.',
    'system'                    => 'Informazioni di sistema',
    'update'                    => 'Aggiorna impostazioni',
    'value'                     => 'Valore',
    'brand'                     => 'Personalizzazione',
    'brand_keywords'            => 'piè di pagina, logo, stampa, tema, skin, intestazione, colori, colore, css',
    'brand_help'                => 'Logo, Nome Sito',
    'web_brand'                 => 'Tipologia di Web Branding',
    'about_settings_title'      => 'Impostazioni',
    'about_settings_text'       => 'Queste impostazioni ti permettono di personalizzare alcuni aspetti della tua installazione.',
    'labels_per_page'           => 'Etichetta per pagina',
    'label_dimensions'          => 'Dimensioni dell\'etichetta (pollici)',
    'next_auto_tag_base'        => 'Avanzamento automatico successivo',
    'page_padding'              => 'Margini della pagina (pollici)',
    'privacy_policy_link'       => 'Link alla politica sulla privacy',
    'privacy_policy'            => 'Informativa sulla privacy',
    'privacy_policy_link_help'  => 'Se un URL è incluso qui, un link alla tua politica sulla privacy sarà incluso nel footer dell\'app e in tutte le e-mail che il sistema invia, in conformità con GDPR. ',
    'purge'                     => 'Eliminare i record cancellati',
    'purge_deleted'             => 'Elimina i Cancellati ',
    'labels_display_bgutter'    => 'Etichettare la grondaia inferiore',
    'labels_display_sgutter'    => 'Lato laterale dell\'etichetta',
    'labels_fontsize'           => 'Dimensione carattere etichetta',
    'labels_pagewidth'          => 'Larghezza della lastra di etichetta',
    'labels_pageheight'         => 'Altezza del foglio di etichetta',
    'label_gutters'        => 'Distanza etichetta (pollici)',
    'page_dimensions'        => 'Dimensioni della pagina (pollici)',
    'label_fields'          => 'Campi visibili delle etichette',
    'inches'        => 'pollici',
    'width_w'        => 'l',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Collegamento a Snipe-IT in posta elettronica',
    'show_url_in_emails_help_text'      => 'Deseleziona questa casella se non si desidera collegare nuovamente all\'installazione Snipe-IT nei piè di pagina di posta elettronica. Utile se la maggior parte dei tuoi utenti non entra mai in login.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altezza massima miniatura',
    'thumbnail_max_h_help'   => 'Altezza massima in pixel che le miniature possono essere visualizzate nella vista elenco. Min 25, max 500.',
    'two_factor'        => 'Autenticazione due fattori',
    'two_factor_secret'        => 'Codice a due fattori',
    'two_factor_enrollment'        => 'Iscrizione a due fattori',
    'two_factor_enabled_text'        => 'Abilita due fattori',
    'two_factor_reset'        => 'Resettare il segreto a due fattori',
    'two_factor_reset_help'        => 'Questo obbligherà l\'utente a registrare nuovamente il proprio dispositivo con l\'app di autenticazione. Questo può essere utile se il loro dispositivo attualmente iscritto viene perso o rubato. ',
    'two_factor_reset_success'          => 'Il dispositivo a due fattori viene resettato con successo',
    'two_factor_reset_error'          => 'Il reset del dispositivo a due fattori è fallito',
    'two_factor_enabled_warning'        => 'L\'abilitazione di due fattori se non è attualmente abilitata vi obbliga immediatamente a autenticare con un dispositivo di accesso a Google Auth. Avrai la possibilità di registrare il tuo dispositivo se uno non è attualmente iscritto.',
    'two_factor_enabled_help'        => 'Questo accenderà l\'autenticazione a due fattori utilizzando Google Authenticator.',
    'two_factor_optional'        => 'Selettivo (gli utenti possono abilitare o disabilitare se consentiti)',
    'two_factor_required'        => 'Obbligatorio per tutti gli utenti',
    'two_factor_disabled'        => 'Disabilitato',
    'two_factor_enter_code'	=> 'Inserisci codice a due fattori',
    'two_factor_config_complete'	=> 'Invia il codice',
    'two_factor_enabled_edit_not_allowed' => 'L\'amministratore non consente di modificare questa impostazione.',
    'two_factor_enrollment_text'	=> "È necessaria l'autenticazione di due fattori, tuttavia il tuo dispositivo non è ancora stato iscritto. Apri l'applicazione Google Authenticator e analizza il codice QR qui sotto per iscriverti al tuo dispositivo. Una volta che hai iscritto il tuo dispositivo, inserisci il codice qui sotto",
    'require_accept_signature'      => 'Richiedi la firma',
    'require_accept_signature_help_text'      => 'L\'attivazione di questa funzionalità richiede che gli utenti si connettano fisicamente all\'accettazione di un\'attività.',
    'left'        => 'sinistra',
    'right'        => 'destra',
    'top'        => 'superiore',
    'bottom'        => 'parte inferiore',
    'vertical'        => 'verticale',
    'horizontal'        => 'orizzontale',
    'unique_serial'                => 'Seriali univoci',
    'unique_serial_help_text'                => 'Selezionando questa casella viene forzato un vincolo di unicità sul seriale del bene',
    'zerofill_count'        => 'Lunghezza dei tag di asset, incluso zerofill',
    'username_format_help'   => 'Questa impostazione sarà usata dal processo di importazione solo se un nome utente non è fornito, e se è necessario creare un nome utente.',
    'oauth_title' => 'Impostazioni API OAuth',
    'oauth_clients' => 'Clients OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Impostazioni Endpoint OAuth',
    'oauth_no_clients' => 'Non hai ancora creato alcun client OAuth.',
    'oauth_secret' => 'Segreto',
    'oauth_authorized_apps' => 'Applicazioni Autorizzate',
    'oauth_redirect_url' => 'URL di reindirizzamento',
    'oauth_name_help' => ' Usa un nome affidabile e riconoscibile.',
    'oauth_scopes' => 'Scope',
    'oauth_callback_url' => 'URL di callback di autorizzazione dell\'applicazione.',
    'create_client' => 'Crea Client',
    'no_scopes' => 'Nessuno scope',
    'asset_tag_title' => 'Aggiorna Impostazioni Tag Beni',
    'barcode_title' => 'Aggiorna Impostazioni Codici A Barre',
    'barcodes' => 'Codici a barre',
    'barcodes_help_overview' => 'Impostazioni codice a barre &amp; QR',
    'barcodes_help' => 'Ciò eliminerà i codici a barre nella cache, utilizzato di solito se le impostazioni dei codici a barre sono cambiate, o se l\'URL di Snipe-IT è cambiato. I codici a barre saranno ri-generati alla prossima richiesta.',
    'barcodes_spinner' => 'Provo a cancellare i file...',
    'barcode_delete_cache' => 'Elimina Cache Codici A Barre',
    'branding_title' => 'Aggiorna Impostazioni Personalizzazione',
    'general_title' => 'Aggiorna Impostazioni Generali',
    'mail_test' => 'Invia Test',
    'mail_test_help' => 'Tenterà d\'inviare una mail di prova a :replyto.',
    'filter_by_keyword' => 'Filtra per parola chiave impostazioni',
    'security' => 'Sicurezza',
    'security_title' => 'Aggiorna Impostazioni Di Sicurezza',
    'security_keywords' => 'password, passwords, requisiti, due fattori, two-factor, password comuni, login remoto, logout, autenticazione',
    'security_help' => 'Due Fattori, Restrizioni Password',
    'groups_keywords' => 'permessi, gruppi di autorizzazioni, autorizzazione',
    'groups_help' => 'Gruppi di autorizzazioni account',
    'localization' => 'Lingua',
    'localization_title' => 'Aggiorna Impostazioni Lingua',
    'localization_keywords' => 'localizzazione, valuta, locale, locali fuso orario, orario, internazionale, internazionalizzazione, lingua, lingue, traduzione',
    'localization_help' => 'Lingua, formato data',
    'notifications' => 'Notifiche',
    'notifications_help' => 'Impostazioni Avvisi E Email Controlli',
    'asset_tags_help' => 'Incrementi e prefissi',
    'labels' => 'Etichette',
    'labels_title' => 'Aggiorna Impostazioni Etichette',
    'labels_help' => 'Dimensioni etichette &amp; impostazioni',
    'purge_keywords' => 'elimina definitivamente',
    'purge_help' => 'Elimina Record Cancellati',
    'ldap_extension_warning' => 'L\'estensione LDAP non è installata o abilitata su questo server. Puoi ancora salvare le impostazioni, ma è necessario abilitare l\'estensione LDAP per PHP prima che il login o la sincronizzazione LDAP funzioni.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Numero Dipendente',
    'create_admin_user' => 'Crea Utente ::',
    'create_admin_success' => 'Successo! L\'utente admin è stato aggiunto!',
    'create_admin_redirect' => 'Clicca qui per accedere alla tua app!',
    'setup_migrations' => 'Migrazioni Database ::',
    'setup_no_migrations' => 'Nulla da migrare. Le tabelle del database sono state già impostate!',
    'setup_successful_migrations' => 'Le tabelle del database sono state create',
    'setup_migration_output' => 'Output migrazione:',
    'setup_migration_create_user' => 'Successivo: Crea Utente',
    'ldap_settings_link' => 'Impostazioni LDAP',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integrazione',
    'label2_enable'           => 'Nuovo motore etichette',
    'label2_enable_help'      => 'Usa il nuovo motore etichette. <b>Nota: Devi salvare questa impostazione prima di cambiare le altre.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Seleziona il template da usare per generare le etichette',
    'label2_title'            => 'Titolo',
    'label2_title_help'       => 'Il titolo da mostrare nelle etichette che lo supportano',
    'label2_title_help_phold' => 'Il placeholder <code>{COMPANY}</code> verrà sostituito con il nome dell\'azienda del bene',
    'label2_asset_logo'       => 'Usa il logo del bene',
    'label2_asset_logo_help'  => 'Usa il logo della azienda del bene, al posto del valore di <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipo Barcode 1D',
    'label2_1d_type_help'     => 'Formato barcode 1D',
    'label2_2d_type'          => 'Tipo Barcode 2D',
    'label2_2d_type_help'     => 'Formato barcode 2D',
    'label2_2d_target'        => 'Target Barcode 2D',
    'label2_2d_target_help'   => 'L\'URL a cui il codice a barre 2D punterà quando scansionato',
    'label2_fields'           => 'Definizioni Campi',
    'label2_fields_help'      => 'I campi possono essere aggiunti, rimossi e riordinati nella colonna di sinistra. Per ogni campo, possono essere aggionte, rimosse e riordinate più opzioni per Label e DataSource nella colonna di destra.',
    'help_asterisk_bold'    => 'Il testo inserito <code>**così**</code> verrà visualizzato in grassetto',
    'help_blank_to_use'     => 'Lascia vuoto per usare il valore in <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> userà il valore di <code>:setting_name</code>. <br>Nota che il valore dei codici a barre deve essere conforme alla rispettiva specifica per essere generati correttamente. Per maggiori dettagli consultare <a href="https://snipe-it.readme.io/docs/barcodes">la documentazione <i class="fa fa-external-link"></i></a>. ',
    'default'               => 'Predefinito',
    'none'                  => 'Niente',
    'google_callback_help' => 'Inserisci qeusto URL come URL di callback nelle impostazioni della tua app Google OAuth nella <strong><a href="https://console.cloud.google.com/" target="_blank">Google Cloud Console<i class="fa fa-external-link" aria-hidden="true"></i></a></strong> della tua organizzazione.',
    'google_login'      => 'Impostazioni Accesso Google Workspace',
    'enable_google_login'  => 'Consenti agli utenti di accedere con Google Workspace',
    'enable_google_login_help'  => 'Gli utenti non verranno creati automaticamente. Devono avere SIA un account qui CHE in Google Workspace e il loro nome utente qui deve corrispondere al loro indirizzo email di Google Workspace. ',
    'mail_reply_to' => 'Indirizzo Mail Reply-To',
    'mail_from' => 'Indirizzo Da:',
    'database_driver' => 'Driver del database',
    'bs_table_storage' => 'Archiviazione Tabella',
    'timezone' => 'Fuso orario',
    'profile_edit'          => 'Modifica Profilo',
    'profile_edit_help'          => 'Consenti agli utenti di modificare i propri profili.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',

];
