<?php
return array(
    // set your paypal credential
    'client_id' => 'AbcNtVeWGMoQ7MoppHPK8bNAfaEcHekyPl_olPFiGJUdVJaWb90dgYZu4CRcmDs3E3RqpDbp68RPtZFv',
    'secret' => 'EHShe8tsos7Z-qmt5RjYVe3rqaWizHupKs5cQSYCGaLi0ejB12PE2RENLqZzy6kZsPeZctfIxdYHDAvO',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);