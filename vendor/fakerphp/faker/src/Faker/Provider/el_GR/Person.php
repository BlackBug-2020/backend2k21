<?php

namespace Faker\Provider\el_GR;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = [
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    ];

    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
    ];

    protected static $firstNameMale = [
        'Αβραάμ', 'Αγαθάγγελος', 'Αγαθοκλής', 'Αγαθόνικος', 'Αγαμέμνων', 'Αγαπητός', 'Αγάπιος', 'Άγγελος', 'Αγησίλαος', 'Αδάμ', 'Αδαμάντιος', 'Άδωνις', 'Αθανάσιος', 'Αθηναγόρας', 'Αθηνόδωρος', 'Αιμίλιος', 'Ακριβός', 'Ακρίτας', 'Αλέξανδρος', 'Αλέξιος', 'Αλκιβιάδης', 'Αμβρόσιος', 'Αναγνώστης', 'Ανανίας', 'Αναξαγόρας', 'Ανάργυρος', 'Αναστάσιος', 'Ανδροκλής', 'Ανδρόνικος', 'Άνθιμος', 'Ανθούλης', 'Αντίγονος', 'Αντίπατρος', 'Αντύπας', 'Αντώνιος', 'Απόλλων', 'Απόστολος', 'Αργύριος', 'Άρης', 'Αρίσταρχος', 'Αριστόβουλος', 'Αριστομένης', 'Άριστος', 'Αριστοτέλης', 'Αριστοφάνης', 'Αρτέμιος', 'Αρχέλαος', 'Αρχιμήδης', 'Ασημής', 'Ασκληπιός', 'Αστέριος', 'Αυγέρης', 'Αύγουστος', 'Αυξέντιος', 'Αφέντης', 'Αχιλλέας',
        'Βάιος', 'Βαλάντης', 'Βαλεντίνος', 'Βαλέριος', 'Βαρδής', 'Βαρθολομαίος', 'Βαρσάμος', 'Βασίλειος', 'Βασίλης', 'Βελισσάριος', 'Βενέτιος', 'Βενιαμίν', 'Βενιζέλος', 'Βησσαρίων', 'Βικέντιος', 'Βλαδίμηρος', 'Βλάσιος', 'Βρασίδας', 'Βύρων',
        'Γαβριήλ', 'Γαλάτιος', 'Γαληνός', 'Γαρύφαλλος', 'Γεράσιμος', 'Γεώργιος', 'Γκίκας', 'Γρηγόριος',
        'Δαμασκηνός', 'Δαμιανός', 'Δανιήλ', 'Δημήτριος', 'Δημοκράτης', 'Δημόκριτος', 'Δήμος', 'Δημοσθένης', 'Δίκαιος', 'Διογένης', 'Διομήδης', 'Διονύσιος', 'Δομήνικος', 'Δράκων', 'Δρόσος', 'Δωρόθεος',
        'Ειρηναίος', 'Έκτορας', 'Ελευθέριος', 'Ελισσαίος', 'Εμμανουήλ', 'Έξαρχος', 'Επαμεινώνδας', 'Ερμής', 'Ερμόλαος', 'Ερρίκος', 'Ερωτόκριτος', 'Ευάγγελος', 'Ευγένιος', 'Ευδόξιος', 'Ευθύμιος', 'Ευκλείδης', 'Ευμένιος', 'Ευριπίδης', 'Ευσέβιος', 'Ευστάθιος', 'Ευστράτιος', 'Ευτύχιος', 'Εφραίμ',
        'Ζαφείριος', 'Ζαχαρίας', 'Ζηνόβιος', 'Ζήνων',
        'Ηλίας', 'Ηρακλής', 'Ηρόδοτος', 'Ησαΐας',
        'Θαλής', 'Θεμιστοκλής', 'Θεοδόσιος', 'Θεόδουλος', 'Θεόδωρος', 'Θεόκλητος', 'Θεολόγος', 'Θεόπιστος', 'Θεοτόκης', 'Θεοφάνης', 'Θεόφιλος', 'Θεόφραστος', 'Θεοφύλακτος', 'Θεοχάρης', 'Θησεύς', 'Θουκυδίδης', 'Θρασύβουλος', 'Θωμάς',
        'Ιάκωβος', 'Ιάσων', 'Ιγνάτιος', 'Ιερεμίας', 'Ιερόθεος', 'Ιερώνυμος', 'Ίκαρος', 'Ιορδάνης', 'Ιουλιανός', 'Ιούλιος', 'Ιπποκράτης', 'Ιππόλυτος', 'Ισαάκ', 'Ισίδωρος', 'Ιωακείμ', 'Ιωάννης', 'Ίων', 'Ιωνάς', 'Ιωσήφ',
        'Καλλίνικος', 'Κάρολος', 'Κηρύκος', 'Κίμων', 'Κλεάνθης', 'Κλέαρχος', 'Κλεόβουλος', 'Κλεομένης', 'Κλεόπας', 'Κλήμης', 'Κομνηνός', 'Κορνήλιος', 'Κοσμάς', 'Κρυστάλλης', 'Κυπριανός', 'Κυριαζής', 'Κυριάκος', 'Κύρος', 'Κωνσταντίνος',
        'Λαέρτης', 'Λάζαρος', 'Λάμπρος', 'Λαοκράτης', 'Λάσκαρης', 'Λαυρέντιος', 'Λέανδρος', 'Λεμονής', 'Λεονάρδος', 'Λέων', 'Λεωνίδας', 'Λογοθέτης', 'Λουδοβίκος', 'Λουκάς', 'Λουκιανός', 'Λυκούργος', 'Λύσανδρος',
        'Μαγδαληνός', 'Μακάριος', 'Μαρίνος', 'Μάριος', 'Μάρκος', 'Μαρτίνος', 'Ματθαίος', 'Μαυρίκιος', 'Μαυροειδής', 'Μαύρος', 'Μεγακλής', 'Μεθόδιος', 'Μελέτιος', 'Μένανδρος', 'Μενέλαος', 'Μερκούριος', 'Μηνάς', 'Μιλτιάδης', 'Μίνωας', 'Μιχαήλ',
        'Ναθαναήλ', 'Ναπολέων', 'Νέαρχος', 'Νεκτάριος', 'Νεοκλής', 'Νεόφυτος', 'Νίκανδρος', 'Νικήτας', 'Νικηφόρος', 'Νικόδημος', 'Νικόλαος', 'Νίκων',
        'Ξανθός', 'Ξενοφών',
        'Οδυσσέας', 'Όθων', 'Όμηρος', 'Ορέστης', 'Ορφέας',
        'Παναγιώτης', 'Πανορμίτης', 'Πανταζής', 'Παντελεήμων', 'Παρασκευάς', 'Παράσχος', 'Πάρις', 'Πασχάλης', 'Πάτροκλος', 'Παύλος', 'Παυσανίας', 'Πελοπίδας', 'Περικλής', 'Πέτρος', 'Πίνδαρος', 'Πλάτων', 'Πλούταρχος', 'Πολύβιος', 'Πολύδωρος', 'Πολυζώης', 'Πολύκαρπος', 'Πολυκράτης', 'Πολυχρόνιος', 'Πραξιτέλης', 'Πρόδρομος', 'Προκόπιος', 'Προμηθέας', 'Πυθαγόρας', 'Πύρρος',
        'Ράλλης', 'Ραφαήλ', 'Ρήγας', 'Ρίζος', 'Ροδόλφος', 'Ρωμανός',
        'Σάββας', 'Σαμουήλ', 'Σαράντης', 'Σεβαστιανός', 'Σεραφείμ', 'Σέργιος', 'Σολομών', 'Σόλων', 'Σοφοκλής', 'Σπυρίδων', 'Σταμάτιος', 'Σταύρος', 'Στέργιος', 'Στέφανος', 'Στυλιανός', 'Συμεών', 'Σώζων', 'Σωκράτης', 'Σωτήριος',
        'Ταξίαρχος', 'Τηλέμαχος', 'Τιμόθεος', 'Τιμολέων', 'Τίμων', 'Τίτος', 'Τριαντάφυλλος', 'Τρύφων', 'Τσαμπίκος',
        'Υάκινθος',
        'Φαίδων', 'Φανούριος', 'Φιλήμων', 'Φίλιππος', 'Φοίβος', 'Φραγκίσκος', 'Φρειδερίκος', 'Φρίξος', 'Φωκάς', 'Φωκίων', 'Φωτεινός', 'Φώτιος',
        'Χαράλαμπος', 'Χαρίλαος', 'Χαρίτος', 'Χρήστος', 'Χριστόδουλος', 'Χριστόφορος', 'Χρύσανθος', 'Χρυσοβαλάντιος', 'Χρυσόστομος',
    ];

    protected static $firstNameFemale = [
        'Αποστολία', 'Αυγή', 'Αγάθη', 'Αγάπη', 'Αγγελική', 'Αγλαΐα', 'Αγνή', 'Αγόρω', 'Αδαμαντία', 'Αηδόνα', 'Αθανασία', 'Αθηνά', 'Αθηνοδώρα', 'Αικατερίνη', 'Αιμιλία', 'Ακριβή', 'Αλεξάνδρα', 'Αλεξία', 'Αλίκη', 'Άλκηστις', 'Αλκινόη', 'Αμαλία', 'Αμβροσία', 'Αμφιθέα', 'Αμφιτρίτη', 'Ανάργυρη', 'Αναστασία', 'Ανατολή', 'Ανδριανή', 'Ανδρομάχη', 'Ανδρομέδα', 'Ανδρονίκη', 'Ανθή', 'Άννα', 'Αντιγόνη', 'Αντωνία', 'Απολλωνία', 'Αποστολία', 'Αργυρώ', 'Αρετή', 'Αριάδνη', 'Αριστέα', 'Άρτεμις', 'Αρτεμισία', 'Αρχοντία', 'Ασημίνα', 'Ασπασία', 'Αστέρω', 'Αταλάντη', 'Αυγουστίνα', 'Αφέντρα', 'Αφροδίτη', 'Αχιλλεία',
        'Βάγια', 'Βαλάντω', 'Βαλεντίνα', 'Βαλέρια', 'Βαρβάρα', 'Βαρσαμία', 'Βασιλεία', 'Βασιλική', 'Βεατρίκη', 'Βελισσαρία', 'Βενετία', 'Βερόνικα', 'Βησσαρία', 'Βικέντια', 'Βικτόρια', 'Βιολέτα', 'Βιργινία', 'Βλασία', 'Βρισηίς',
        'Γαβριέλλα', 'Γαλάτεια', 'Γαλήνη', 'Γαρυφαλλιά', 'Γενοβέφα', 'Γερακίνα', 'Γερασιμούλα', 'Γεσθημανή', 'Γεωργία', 'Γιασεμή', 'Γκόλφω', 'Γλαύκη', 'Γλυκερία', 'Γραμματική',
        'Δαβιδούλα', 'Δαμασκηνή', 'Δαμιανή', 'Δανάη', 'Δάφνη', 'Δέσποινα', 'Δήμητρα', 'Δημούλα', 'Διαλεκτή', 'Διδώ', 'Δικαία', 'Διονυσία', 'Δόμνα', 'Δροσιά', 'Δωροθέα',
        'Ειρήνη', 'Ελένη', 'Ελεονόρα', 'Ελευθερία', 'Ελισάβετ', 'Έλλη', 'Ελπίς', 'Εμμανουέλα', 'Επιστήμη', 'Ερασμία', 'Ερατώ', 'Εριέτα', 'Εριφύλη', 'Ερμιόνη', 'Ερωφίλη', 'Εύα', 'Ευαγγελία', 'Ευανθία', 'Ευγενία', 'Ευδοκία', 'Ευδοξία', 'Ευθαλία', 'Ευθυμία', 'Εύκλεια', 'Ευλαμπία', 'Ευρυδίκη', 'Ευρύκλεια', 'Ευσεβεία', 'Ευσταθία', 'Ευστρατία', 'Ευτέρπη', 'Ευτυχία',
        'Ζαμπέτα', 'Ζαφειρία', 'Ζαχαρούλα', 'Ζηναϊς', 'Ζηνοβία', 'Ζησούλα', 'Ζωή',
        'Ήβη', 'Ηλέκτρα', 'Ήλια', 'Ηλιάνα', 'Ήρα', 'Ηράκλεια', 'Ηώ',
        'Θαλασσινή', 'Θάλεια', 'Θεανώ', 'Θέκλα', 'Θέμις', 'Θεμιστόκλεια', 'Θεοδοσία', 'Θεοδότη', 'Θεοδούλη', 'Θεοδώρα', 'Θεόκλεια', 'Θεολογία', 'Θεοπίστη', 'Θεοφανία', 'Θεοφίλη', 'Θεοφύλακτη', 'Θεοχαρούλα', 'Θέτις', 'Θεώνη', 'Θηρεσία', 'Θωμαίς',
        'Ιακωβίνα', 'Ιγνατία', 'Ινώ', 'Ιοκάστη', 'Ιορδανία', 'Ιουλία', 'Ιουλιανή', 'Ιππολύτη', 'Ίρις', 'Ισαβέλλα', 'Ισιδώρα', 'Ισμήνη', 'Ιφιγένεια', 'Ιωάννα', 'Ιωσηφίνα',
        'Καλή', 'Καλλίνικη', 'Καλλιόπη', 'Καλλιρρόη', 'Καλομοίρα', 'Καλυψώ', 'Κανέλλα', 'Καρυοφυλλιά', 'Κασσάνδρα', 'Κασσιανή', 'Κερασιά', 'Κλαίρη', 'Κλειώ', 'Κλεοπάτρα', 'Κλημεντίνη', 'Κλυταιμνήστρα', 'Κοκκώνα', 'Κομνηνή', 'Κονδυλία', 'Κοραλία', 'Κορνηλία', 'Κόσμια', 'Κρινιώ', 'Κρυσταλλένια', 'Κυβέλη', 'Κυδωνία', 'Κυπαρισσία', 'Κυπριανή', 'Κυριακή', 'Κωνσταντίνα',
        'Λαζαρία', 'Λαμπρινή', 'Λασκαρίνα', 'Λαυρεντία', 'Λεμονιά', 'Λευκοθέα', 'Λεώνη', 'Λεωνιδιά', 'Λήδα', 'Λητώ', 'Λουίζα', 'Λουκία', 'Λουλουδένια', 'Λυγερή', 'Λυδία',
        'Μαγδαληνή', 'Μακρίνα', 'Μαλαματένια', 'Μαλβίνα', 'Μάνθα', 'Μαντώ', 'Μαργαρίτα', 'Μάρθα', 'Μαρία', 'Μαριάνθη', 'Μαρίνα', 'Μαρκέλλα', 'Ματθίλδη', 'Μαύρα', 'Μελένια', 'Μελέτια', 'Μελίνα', 'Μελπομένη', 'Μερόπη', 'Μεταξία', 'Μηλιά', 'Μιράντα', 'Μιχαέλα', 'Μόσχα', 'Μυρσίνη',
        'Ναυσικά', 'Νεκταρία', 'Νεόκλεια', 'Νερατζιά', 'Νεφέλη', 'Νίκη', 'Νικητία', 'Νικολέτα',
        'Ξανθή', 'Ξανθίππη', 'Ξένη',
        'Οδύσσεια', 'Όλγα', 'Ολύμπια', 'Ουρανία',
        'Παγώνα', 'Παναγία', 'Παναγιώτα', 'Πανδώρα', 'Παντελία', 'Πανωραία', 'Παρασκευή', 'Παρθένα', 'Πασχαλιά', 'Παταπία', 'Παυλίνα', 'Πελαγία', 'Περιστέρα', 'Περσεφόνη', 'Πέτρα', 'Πηγή', 'Πηνελόπη', 'Ποθητή', 'Πολύβια', 'Πολύδωρα', 'Πολύμνια', 'Πολυξένη', 'Πολυτίμη', 'Πολυχρονία', 'Πούλια', 'Προδρομία',
        'Ραλλία', 'Ρέα', 'Ρεβέκκα', 'Ρεγγίνα', 'Ρηγούλα', 'Ροδιά', 'Ρόζα', 'Ρουμπίνη', 'Ρούσα', 'Ρωξάνη',
        'Σαββούλα', 'Σαλώμη', 'Σαπφώ', 'Σάρρα', 'Σεβαστή', 'Σεβαστιανή', 'Σελήνη', 'Σεμίνα', 'Σεραφεία', 'Σμαράγδα', 'Σουλτάνα', 'Σουμέλα', 'Σοφία', 'Σπάρτη', 'Σπυριδούλα', 'Σταματίνα', 'Σταυρούλα', 'Στεργιανή', 'Στεφανία', 'Στυλιανή', 'Συμεωνία', 'Σωζούσα', 'Σωτηρία', 'Σωφρονία',
        'Ταξιαρχία', 'Τατιάνα', 'Τερψιχόρη', 'Τιμοθέα', 'Τριαντάφυλλη', 'Τρισεύγενη', 'Τρυφωνία', 'Τσαμπίκα',
        'Υακίνθη', 'Υβόννη', 'Υπαπαντή',
        'Φαίδρα', 'Φανουρία', 'Φεβρωνία', 'Φερενίκη', 'Φιλαρέτη', 'Φιλίππα', 'Φιλιππία', 'Φιλιώ', 'Φιλοθέη', 'Φιλομήλα', 'Φλώρα', 'Φλωρεντία', 'Φοίβη', 'Φραντζέσκα', 'Φρειδερίκη', 'Φρύνη', 'Φωτεινή',
        'Χάιδω', 'Χαρά', 'Χαραλαμπία', 'Χάρη', 'Χαρίκλεια', 'Χιονιά', 'Χλόη', 'Χριστοδούλα', 'Χριστόφιλη', 'Χριστοφόρα', 'Χρυσάνθη', 'Χρυσαυγή', 'Χρυσαφένια', 'Χρυσοβαλάντω', 'Χρυσόστομη', 'Χρυσούλα',
    ];

    protected static $firstName = [
        'Αβραάμ', 'Αγαθάγγελος', 'Αγαθοκλής', 'Αγαθόνικος', 'Αγαμέμνων', 'Αγαπητός', 'Αγάπιος', 'Άγγελος', 'Αγησίλαος', 'Αδάμ', 'Αδαμάντιος', 'Άδωνις', 'Αθανάσιος', 'Αθηναγόρας', 'Αθηνόδωρος', 'Αιμίλιος', 'Ακριβός', 'Ακρίτας', 'Αλέξανδρος', 'Αλέξιος', 'Αλκιβιάδης', 'Αμβρόσιος', 'Αναγνώστης', 'Ανανίας', 'Αναξαγόρας', 'Ανάργυρος', 'Αναστάσιος', 'Ανδροκλής', 'Ανδρόνικος', 'Άνθιμος', 'Ανθούλης', 'Αντίγονος', 'Αντίπατρος', 'Αντύπας', 'Αντώνιος', 'Απόλλων', 'Απόστολος', 'Αργύριος', 'Άρης', 'Αρίσταρχος', 'Αριστόβουλος', 'Αριστομένης', 'Άριστος', 'Αριστοτέλης', 'Αριστοφάνης', 'Αρτέμιος', 'Αρχέλαος', 'Αρχιμήδης', 'Ασημής', 'Ασκληπιός', 'Αστέριος', 'Αυγέρης', 'Αύγουστος', 'Αυξέντιος', 'Αφέντης', 'Αχιλλέας',
        'Βάιος', 'Βαλάντης', 'Βαλεντίνος', 'Βαλέριος', 'Βαρδής', 'Βαρθολομαίος', 'Βαρσάμος', 'Βασίλειος', 'Βασίλης', 'Βελισσάριος', 'Βενέτιος', 'Βενιαμίν', 'Βενιζέλος', 'Βησσαρίων', 'Βικέντιος', 'Βλαδίμηρος', 'Βλάσιος', 'Βρασίδας', 'Βύρων',
        'Γαβριήλ', 'Γαλάτιος', 'Γαληνός', 'Γαρύφαλλος', 'Γεράσιμος', 'Γεώργιος', 'Γκίκας', 'Γρηγόριος',
        'Δαμασκηνός', 'Δαμιανός', 'Δανιήλ', 'Δημήτριος', 'Δημοκράτης', 'Δημόκριτος', 'Δήμος', 'Δημοσθένης', 'Δίκαιος', 'Διογένης', 'Διομήδης', 'Διονύσιος', 'Δομήνικος', 'Δράκων', 'Δρόσος', 'Δωρόθεος',
        'Ειρηναίος', 'Έκτορας', 'Ελευθέριος', 'Ελισσαίος', 'Εμμανουήλ', 'Έξαρχος', 'Επαμεινώνδας', 'Ερμής', 'Ερμόλαος', 'Ερρίκος', 'Ερωτόκριτος', 'Ευάγγελος', 'Ευγένιος', 'Ευδόξιος', 'Ευθύμιος', 'Ευκλείδης', 'Ευμένιος', 'Ευριπίδης', 'Ευσέβιος', 'Ευστάθιος', 'Ευστράτιος', 'Ευτύχιος', 'Εφραίμ',
        'Ζαφείριος', 'Ζαχαρίας', 'Ζηνόβιος', 'Ζήνων',
        'Ηλίας', 'Ηρακλής', 'Ηρόδοτος', 'Ησαΐας',
        'Θαλής', 'Θεμιστοκλής', 'Θεοδόσιος', 'Θεόδουλος', 'Θεόδωρος', 'Θεόκλητος', 'Θεολόγος', 'Θεόπιστος', 'Θεοτόκης', 'Θεοφάνης', 'Θεόφιλος', 'Θεόφραστος', 'Θεοφύλακτος', 'Θεοχάρης', 'Θησεύς', 'Θουκυδίδης', 'Θρασύβουλος', 'Θωμάς',
        'Ιάκωβος', 'Ιάσων', 'Ιγνάτιος', 'Ιερεμίας', 'Ιερόθεος', 'Ιερώνυμος', 'Ίκαρος', 'Ιορδάνης', 'Ιουλιανός', 'Ιούλιος', 'Ιπποκράτης', 'Ιππόλυτος', 'Ισαάκ', 'Ισίδωρος', 'Ιωακείμ', 'Ιωάννης', 'Ίων', 'Ιωνάς', 'Ιωσήφ',
        'Καλλίνικος', 'Κάρολος', 'Κηρύκος', 'Κίμων', 'Κλεάνθης', 'Κλέαρχος', 'Κλεόβουλος', 'Κλεομένης', 'Κλεόπας', 'Κλήμης', 'Κομνηνός', 'Κορνήλιος', 'Κοσμάς', 'Κρυστάλλης', 'Κυπριανός', 'Κυριαζής', 'Κυριάκος', 'Κύρος', 'Κωνσταντίνος',
        'Λαέρτης', 'Λάζαρος', 'Λάμπρος', 'Λαοκράτης', 'Λάσκαρης', 'Λαυρέντιος', 'Λέανδρος', 'Λεμονής', 'Λεονάρδος', 'Λέων', 'Λεωνίδας', 'Λογοθέτης', 'Λουδοβίκος', 'Λουκάς', 'Λουκιανός', 'Λυκούργος', 'Λύσανδρος',
        'Μαγδαληνός', 'Μακάριος', 'Μαρίνος', 'Μάριος', 'Μάρκος', 'Μαρτίνος', 'Ματθαίος', 'Μαυρίκιος', 'Μαυροειδής', 'Μαύρος', 'Μεγακλής', 'Μεθόδιος', 'Μελέτιος', 'Μένανδρος', 'Μενέλαος', 'Μερκούριος', 'Μηνάς', 'Μιλτιάδης', 'Μίνωας', 'Μιχαήλ',
        'Ναθαναήλ', 'Ναπολέων', 'Νέαρχος', 'Νεκτάριος', 'Νεοκλής', 'Νεόφυτος', 'Νίκανδρος', 'Νικήτας', 'Νικηφόρος', 'Νικόδημος', 'Νικόλαος', 'Νίκων',
        'Ξανθός', 'Ξενοφώντης',
        'Οδυσσέας', 'Όθων', 'Όμηρος', 'Ορέστης', 'Ορφέας',
        'Παναγιώτης', 'Πανορμίτης', 'Πανταζής', 'Παντελεήμων', 'Παρασκευάς', 'Παράσχος', 'Πάρις', 'Πασχάλης', 'Πάτροκλος', 'Παύλος', 'Παυσανίας', 'Πελοπίδας', 'Περικλής', 'Πέτρος', 'Πίνδαρος', 'Πλάτων', 'Πλούταρχος', 'Πολύβιος', 'Πολύδωρος', 'Πολυζώης', 'Πολύκαρπος', 'Πολυκράτης', 'Πολυχρόνιος', 'Πραξιτέλης', 'Πρόδρομος', 'Προκόπιος', 'Προμηθέας', 'Πυθαγόρας', 'Πύρρος',
        'Ράλλης', 'Ραφαήλ', 'Ρήγας', 'Ρίζος', 'Ροδόλφος', 'Ρωμανός',
        'Σάββας', 'Σαμουήλ', 'Σαράντης', 'Σεβαστιανός', 'Σεραφείμ', 'Σέργιος', 'Σολομών', 'Σόλων', 'Σοφοκλής', 'Σπυρίδων', 'Σταμάτιος', 'Σταύρος', 'Στέργιος', 'Στέφανος', 'Στυλιανός', 'Συμεών', 'Σώζων', 'Σωκράτης', 'Σωτήριος',
        'Ταξίαρχος', 'Τηλέμαχος', 'Τιμόθεος', 'Τιμολέων', 'Τίμων', 'Τίτος', 'Τριαντάφυλλος', 'Τρύφων', 'Τσαμπίκος',
        'Υάκινθος',
        'Φαίδων', 'Φανούριος', 'Φιλήμων', 'Φίλιππος', 'Φοίβος', 'Φραγκίσκος', 'Φρειδερίκος', 'Φρίξος', 'Φωκάς', 'Φωκίων', 'Φωτεινός', 'Φώτιος',
        'Χαράλαμπος', 'Χαρίλαος', 'Χαρίτος', 'Χρήστος', 'Χριστόδουλος', 'Χριστόφορος', 'Χρύσανθος', 'Χρυσοβαλάντιος', 'Χρυσόστομος',
        'Αποστολία', 'Αυγή', 'Αγάθη', 'Αγάπη', 'Αγγελική', 'Αγλαΐα', 'Αγνή', 'Αγόρω', 'Αδαμαντία', 'Αηδόνα', 'Αθανασία', 'Αθηνά', 'Αθηνοδώρα', 'Αικατερίνη', 'Αιμιλία', 'Ακριβή', 'Αλεξάνδρα', 'Αλεξία', 'Αλίκη', 'Άλκηστις', 'Αλκινόη', 'Αμαλία', 'Αμβροσία', 'Αμφιθέα', 'Αμφιτρίτη', 'Ανάργυρη', 'Αναστασία', 'Ανατολή', 'Ανδριανή', 'Ανδρομάχη', 'Ανδρομέδα', 'Ανδρονίκη', 'Ανθή', 'Άννα', 'Αντιγόνη', 'Αντωνία', 'Απολλωνία', 'Αποστολία', 'Αργυρώ', 'Αρετή', 'Αριάδνη', 'Αριστέα', 'Άρτεμις', 'Αρτεμισία', 'Αρχοντία', 'Ασημίνα', 'Ασπασία', 'Αστέρω', 'Αταλάντη', 'Αυγουστίνα', 'Αφέντρα', 'Αφροδίτη', 'Αχιλλεία',
        'Βάγια', 'Βαλάντω', 'Βαλεντίνα', 'Βαλέρια', 'Βαρβάρα', 'Βαρσαμία', 'Βασιλεία', 'Βασιλική', 'Βεατρίκη', 'Βελισσαρία', 'Βενετία', 'Βερόνικα', 'Βησσαρία', 'Βικέντια', 'Βικτόρια', 'Βιολέτα', 'Βιργινία', 'Βλασία', 'Βρισηίς',
        'Γαβριέλλα', 'Γαλάτεια', 'Γαλήνη', 'Γαρυφαλλιά', 'Γενοβέφα', 'Γερακίνα', 'Γερασιμούλα', 'Γεσθημανή', 'Γεωργία', 'Γιασεμή', 'Γκόλφω', 'Γλαύκη', 'Γλυκερία', 'Γραμματική',
        'Δαβιδούλα', 'Δαμασκηνή', 'Δαμιανή', 'Δανάη', 'Δάφνη', 'Δέσποινα', 'Δήμητρα', 'Δημούλα', 'Διαλεκτή', 'Διδώ', 'Δικαία', 'Διονυσία', 'Δόμνα', 'Δροσιά', 'Δωροθέα',
        'Ειρήνη', 'Ελένη', 'Ελεονόρα', 'Ελευθερία', 'Ελισάβετ', 'Έλλη', 'Ελπίς', 'Εμμανουέλα', 'Επιστήμη', 'Ερασμία', 'Ερατώ', 'Εριέτα', 'Εριφύλη', 'Ερμιόνη', 'Ερωφίλη', 'Εύα', 'Ευαγγελία', 'Ευανθία', 'Ευγενία', 'Ευδοκία', 'Ευδοξία', 'Ευθαλία', 'Ευθυμία', 'Εύκλεια', 'Ευλαμπία', 'Ευρυδίκη', 'Ευρύκλεια', 'Ευσεβεία', 'Ευσταθία', 'Ευστρατία', 'Ευτέρπη', 'Ευτυχία',
        'Ζαμπέτα', 'Ζαφειρία', 'Ζαχαρούλα', 'Ζηναϊς', 'Ζηνοβία', 'Ζησούλα', 'Ζωή',
        'Ήβη', 'Ηλέκτρα', 'Ήλια', 'Ηλιάνα', 'Ήρα', 'Ηράκλεια', 'Ηώ',
        'Θαλασσινή', 'Θάλεια', 'Θεανώ', 'Θέκλα', 'Θέμις', 'Θεμιστόκλεια', 'Θεοδοσία', 'Θεοδότη', 'Θεοδούλη', 'Θεοδώρα', 'Θεόκλεια', 'Θεολογία', 'Θεοπίστη', 'Θεοφανία', 'Θεοφίλη', 'Θεοφύλακτη', 'Θεοχαρούλα', 'Θέτις', 'Θεώνη', 'Θηρεσία', 'Θωμαίς',
        'Ιακωβίνα', 'Ιγνατία', 'Ινώ', 'Ιοκάστη', 'Ιορδανία', 'Ιουλία', 'Ιουλιανή', 'Ιππολύτη', 'Ίρις', 'Ισαβέλλα', 'Ισιδώρα', 'Ισμήνη', 'Ιφιγένεια', 'Ιωάννα', 'Ιωσηφίνα',
        'Καλή', 'Καλλίνικη', 'Καλλιόπη', 'Καλλιρρόη', 'Καλομοίρα', 'Καλυψώ', 'Κανέλλα', 'Καρυοφυλλιά', 'Κασσάνδρα', 'Κασσιανή', 'Κερασιά', 'Κλαίρη', 'Κλειώ', 'Κλεοπάτρα', 'Κλημεντίνη', 'Κλυταιμνήστρα', 'Κοκκώνα', 'Κομνηνή', 'Κονδυλία', 'Κοραλία', 'Κορνηλία', 'Κόσμια', 'Κρινιώ', 'Κρυσταλλένια', 'Κυβέλη', 'Κυδωνία', 'Κυπαρισσία', 'Κυπριανή', 'Κυριακή', 'Κωνσταντίνα',
        'Λαζαρία', 'Λαμπρινή', 'Λασκαρίνα', 'Λαυρεντία', 'Λεμονιά', 'Λευκοθέα', 'Λεώνη', 'Λεωνιδιά', 'Λήδα', 'Λητώ', 'Λουίζα', 'Λουκία', 'Λουλουδένια', 'Λυγερή', 'Λυδία',
        'Μαγδαληνή', 'Μακρίνα', 'Μαλαματένια', 'Μαλβίνα', 'Μάνθα', 'Μαντώ', 'Μαργαρίτα', 'Μάρθα', 'Μαρία', 'Μαριάνθη', 'Μαρίνα', 'Μαρκέλλα', 'Ματθίλδη', 'Μαύρα', 'Μελένια', 'Μελέτια', 'Μελίνα', 'Μελπομένη', 'Μερόπη', 'Μεταξία', 'Μηλιά', 'Μιράντα', 'Μιχαέλα', 'Μόσχα', 'Μυρσίνη',
        'Ναυσικά', 'Νεκταρία', 'Νεόκλεια', 'Νερατζιά', 'Νεφέλη', 'Νίκη', 'Νικητία', 'Νικολέτα',
        'Ξανθή', 'Ξανθίππη', 'Ξένη',
        'Οδύσσεια', 'Όλγα', 'Ολύμπια', 'Ουρανία',
        'Παγώνα', 'Παναγία', 'Παναγιώτα', 'Πανδώρα', 'Παντελία', 'Πανωραία', 'Παρασκευή', 'Παρθένα', 'Πασχαλιά', 'Παταπία', 'Παυλίνα', 'Πελαγία', 'Περιστέρα', 'Περσεφόνη', 'Πέτρα', 'Πηγή', 'Πηνελόπη', 'Ποθητή', 'Πολύβια', 'Πολύδωρα', 'Πολύμνια', 'Πολυξένη', 'Πολυτίμη', 'Πολυχρονία', 'Πούλια', 'Προδρομία',
        'Ραλλία', 'Ρέα', 'Ρεβέκκα', 'Ρεγγίνα', 'Ρηγούλα', 'Ροδιά', 'Ρόζα', 'Ρουμπίνη', 'Ρούσα', 'Ρωξάνη',
        'Σαββούλα', 'Σαλώμη', 'Σαπφώ', 'Σάρρα', 'Σεβαστή', 'Σεβαστιανή', 'Σελήνη', 'Σεμίνα', 'Σεραφεία', 'Σμαράγδα', 'Σουλτάνα', 'Σουμέλα', 'Σοφία', 'Σπάρτη', 'Σπυριδούλα', 'Σταματίνα', 'Σταυρούλα', 'Στεργιανή', 'Στεφανία', 'Στυλιανή', 'Συμεωνία', 'Σωζούσα', 'Σωτηρία', 'Σωφρονία',
        'Ταξιαρχία', 'Τατιάνα', 'Τερψιχόρη', 'Τιμοθέα', 'Τριαντάφυλλη', 'Τρισεύγενη', 'Τρυφωνία', 'Τσαμπίκα',
        'Υακίνθη', 'Υβόννη', 'Υπαπαντή',
        'Φαίδρα', 'Φανουρία', 'Φεβρωνία', 'Φερενίκη', 'Φιλαρέτη', 'Φιλίππα', 'Φιλιππία', 'Φιλιώ', 'Φιλοθέη', 'Φιλομήλα', 'Φλώρα', 'Φλωρεντία', 'Φοίβη', 'Φραντζέσκα', 'Φρειδερίκη', 'Φρύνη', 'Φωτεινή',
        'Χάιδω', 'Χαρά', 'Χαραλαμπία', 'Χάρη', 'Χαρίκλεια', 'Χιονιά', 'Χλόη', 'Χριστοδούλα', 'Χριστόφιλη', 'Χριστοφόρα', 'Χρυσάνθη', 'Χρυσαυγή', 'Χρυσαφένια', 'Χρυσοβαλάντω', 'Χρυσόστομη', 'Χρυσούλα',
    ];

    protected static $lastNameMale = [
        'Αγγελίδης', 'Αγγελόπουλος', 'Αθανασιάδης', 'Αλαφούζος', 'Αλεβίζος', 'Αλεξόπουλος', 'Αλιβιζάτος', 'Αναγνωστόπουλος', 'Αναστασιάδης', 'Αναστασίου', 'Ανδρεάδης', 'Αντωνιάδης', 'Αντωνόπουλος', 'Αποστολόπουλος',
        'Αξιώτης', 'Βαρουξής', 'Βασιλείου', 'Βασιλόπουλος', 'Βενιζέλος', 'Βέργας', 'Βιτάλης', 'Βούλγαρης', 'Γαλάνης', 'Γερμανός', 'Γεωργίου', 'Γεωργιάδης', 'Γιάγκος', 'Γιαννόπουλος', 'Γιαννακόπουλος', 'Γιάνναρης',
        'Γούσιος', 'Γρηγοριάδης', 'Δασκαλόπουλος', 'Δελής', 'Διαμαντόπουλος', 'Δημητριάδης', 'Δουρέντης', 'Ελευθερόπουλος', 'Ελευθεριάδης', 'Ευθυμιάδης', 'Ευσταθιάδης', 'Ευταξίας', 'Ζαχαριάδης', 'Ζερβός', 'Ζωγραφός',
        'Ηλιάδης', 'Ηλιόπουλος', 'Θεοτόκης', 'Θεωδωρόπουλος', 'Θεωδώρου', 'Θεωδωρίδης', 'Ιατρίδης', 'Ιωαννίδης', 'Καλύβας', 'Καραβίας', 'Καννελόπουλος', 'Καραγιάννης', 'Κεδίκογλου', 'Κολιάτσος', 'Κόκκινος', 'Κομνηνός',
        'Κοντολέων', 'Κοντός', 'Κόρακας', 'Κορομηλάς', 'Κορωναίος', 'Κοσμόπουλος', 'Κουταλιανός', 'Κυπραίος', 'Κωνσταντίνου', 'Κωνσταντινίδης', 'Κωνσταντόπουλος', 'Κωστόπουλος', 'Κρητικός', 'Κυριακόπουλος', 'Λαμέρας',
        'Λαμπρόπουλος', 'Λούλης', 'Μακρής', 'Μανιάκης', 'Μαρκόπουλος', 'Μαυρλίδης', 'Μεταξάς', 'Μιχαηλίδης', 'Μπλέτσας', 'Νικολαΐδης', 'Νικολάκος', 'Νικολόπουλος', 'Ξανθόπουλος', 'Ξένος', 'Οικονομίδης', 'Ουζουνίδης',
        'Παναγιωτίδης', 'Πανταζής', 'Παπαγεωργίου', 'Παπάγος', 'Παπαδάκης', 'Παπαδόπουλος', 'Παπάζογλου', 'Παπακώστας', 'Παπανδρέου', 'Παπανικολάου', 'Παπαντωνίου', 'Παπαστεφάνου', 'Παπαφιλίππου', 'Παπαϊωάννου', 'Παππάς',
        'Παυλόπουλος', 'Πολίτης', 'Πρωτοβεστιάριος', 'Πρωτονοτάριος', 'Ρούσσος', 'Ρέντης', 'Ράγκος', 'Ρόκας', 'Σακελλάρης', 'Σαμαράς', 'Σκλαβούνος', 'Σπανός', 'Σιδέρης', 'Σπηλιωτόπουλος', 'Σπυρόπουλος', 'Σταματιάδης',
        'Σταυρόπουλος', 'Στεφανόπουλος', 'Ταμτάκος', 'Τοκατλίδης', 'Τριανταφυλλίδης', 'Τρικούπη', 'Τρικούπης', 'Φιλιππίδης', 'Φλέσσας', 'Φωτιάδης', 'Φωτόπουλος', 'Χαραλαμπίδης', 'Χατζηνικόλαου', 'Χριστόπουλος',
    ];

    protected static $lastNameFemale = [
        'Αγγελίδου', 'Αγγελοπούλου', 'Αλεξάνδρου', 'Αλεξάνδρου', 'Αλεξίου', 'Αναγνώστου', 'Αναστασίου', 'Ανδρέου', 'Αντωνοπούλου', 'Ανυφαντή', 'Ανυφαντή', 'Αργυρού', 'Βαριμπόμπη', 'Βιτάλη', 'Γάσπαρη', 'Γαλάνη', 'Γεννήτη',
        'Γερμανού', 'Γεωγιάδου', 'Γεωργίβαλου', 'Γεωργίου', 'Γιακουμή', 'Γιαννακοπούλου', 'Γρηγοριάδου', 'Δασκαλοπούλου', 'Διδασκάλου', 'Δημητριάδου', 'Ελευθερίου', 'Ευθυμιάδου', 'Ηλιοπούλου', 'Θεοτόκου', 'Θεωδωροπούλου',
        'Θεωδώρου', 'Θεωδωρίδου', 'Ιωάννου', 'Καπετανάκη', 'Καπνού', 'Καρσιβάνη', 'Κοκκίνου', 'Κωνσταντινίδου', 'Κωνσταντίνου', 'Κυριακοπούλου', 'Λάσκαρη', 'Λασκαρού', 'Μάκρη', 'Μακρή', 'Μοραΐτη', 'Μπόγρη', 'Μυλωνά',
        'Νικολάου', 'Νικολοπούλου', 'Ξανθοπούλου', 'Οικονομίδου', 'Οικονομοπούλου', 'Οικονόμου', 'Παπαδοπούλου', 'Παπακιρίσκου', 'Παπακωνσταντίνου', 'Παπαμάρκου', 'Παπαστάμου', 'Ράφτη', 'Σακελλαρίου', 'Σελινά', 'Σκουτέρη',
        'Σπανού', 'Σταματιάδου', 'Σωπολιάτη', 'Τριανταφυλλίδου', 'Φοσκιά', 'Φωτιάδου', 'Χαραλαμπίδου', 'Χατζηιωάννου',
    ];

    protected static $titleMale = ['κος.', 'κ.'];
    protected static $titleFemale = ['δις.', 'δνις.', 'κα.'];

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @example 'Αγγελόπουλος'
     */
    public function lastName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return $this->generator->parse(static::randomElement(static::$lastNameFormat));
    }

    /**
     * @example 'Θεωδωρόπουλος'
     */
    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    /**
     * @example 'Κοκκίνου'
     */
    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }
}
