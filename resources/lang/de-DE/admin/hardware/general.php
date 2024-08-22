<?php

return [
    'about_assets_title'           => 'Über Assets',
    'about_assets_text'            => 'Assets sind Gegenstände die durch eine Seriennummer oder einem Asset-Tag identifiziert werden. Meistens sind diese Gegenstände von höherem Wert, weshalb es Sinn ergibt diese spezifisch zu kennzeichnen.',
    'archived'  				=> 'Archiviert',
    'asset'  					=> 'Asset',
    'bulk_checkout'             => 'Assets herausgeben',
    'bulk_checkin'              => 'Assets zurücknehmen',
    'checkin'  					=> 'Asset zurücknehmen',
    'checkout'  				=> 'Asset herausgeben',
    'clone'  					=> 'Asset duplizieren',
    'deployable'  				=> 'Einsetzbar',
    'deleted'  					=> 'Dieses Asset wurde gelöscht.',
    'delete_confirm'            => 'Sind Sie sich sicher, dass Sie dieses Asset löschen möchten?',
    'edit'  					=> 'Asset bearbeiten',
    'model_deleted'  			=> 'Dieses Modell für Assets wurde gelöscht. Sie müssen das Modell wiederherstellen, bevor Sie das Asset wiederherstellen können.',
    'model_invalid'             => 'Dieses Modell für dieses Asset ist ungültig.',
    'model_invalid_fix'         => 'Das Asset muss mithilfe eines gültigen Asset-Modells aktualisiert werden, bevor Sie versuchen, es ein- oder auszuchecken oder zu prüfen.',
    'requestable'               => 'Anforderbar',
    'requested'				    => 'Angefordert',
    'not_requestable'           => 'Kann nicht angefordert werden',
    'requestable_status_warning' => 'Wechsle nicht den Status "Anforderbar"',
    'restore'  					=> 'Asset wiederherstellen',
    'pending'  					=> 'Ausstehend',
    'undeployable'  			=> 'Nicht einsetzbar',
    'undeployable_tooltip'  	=> 'Dieses Asset hat eine Statusbezeichnung, die nicht einsetzbar ist und zu diesem Zeitpunkt nicht ausgecheckt werden kann.',
    'view'  					=> 'Asset ansehen',
    'csv_error' => 'Es gibt einen Fehler in der CSV-Datei:',
    'import_text' => '<p>Laden Sie eine CSV hoch, das den Assetverlauf enthält. Die Assets und Benutzer MÜSSEN bereits im System vorhanden sein oder sie werden übersprungen. Für den Verlaufsimport passende Assets werden über den Asset-Tag zugeordnet. Wir werden versuchen, einen passenden Benutzer, basierend auf dem von Ihnen angegebenen Benutzernamen und den unten ausgewählten Kriterien, zu finden. Wenn Sie keine Kriterien auswählen, wird über das Benutzernamensformat, das Sie in <code>Admin- &gt; Allgemeine Einstellungen</code>konfiguriert haben, eine Zuordnung versucht.</p><p>Felder, die in der CSV enthalten sind, müssen mit den Kopfzeilen übereinstimmen: <strong>Asset Tag, Name, Checkout Datum, Check-in Datum</strong>. Zusätzliche Felder werden ignoriert. </p><p>Check-in Datum: Bei leeren oder zukünftiger Check-in Daten werden die Elemente direkt dem genannten User ausgecheckt. Ohne die Spalte Check-in Datum wird das aktuelle Datum gesetzt.</p>
    ',
    'csv_import_match_f-l' => 'Versuchen Sie, Benutzer im <strong>Vorname.Nachname</strong> (<code>jane.smith</code>) Format zu finden',
    'csv_import_match_initial_last' => 'Versuchen Sie, Benutzer im <strong>ersten ersten Nachnamen</strong> (<code>jsmith</code>) Format zu finden',
    'csv_import_match_first' => 'Versuchen Sie, Benutzer im <strong>Vorname</strong> (<code>jane</code>) Format zu finden',
    'csv_import_match_email' => 'Versuchen Sie, Benutzer mit <strong>E-Mail</strong> als Benutzername zu identifizieren',
    'csv_import_match_username' => 'Versuche Benutzer mit <strong>Benutzernamen</strong> zu identifizieren',
    'error_messages' => 'Fehlermeldungen:',
    'success_messages' => 'Erfolgsmeldungen:',
    'alert_details' => 'Siehe unten für Details.',
    'custom_export' => 'Benutzerdefinierter Export',
    'mfg_warranty_lookup' => ':manufacturer Garantiestatus Abfrage',
    'user_department' => 'Abteilung des Benutzers',
];
