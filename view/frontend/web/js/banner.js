/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'uiComponent',
    'jquery',
    'Magento_Ui/js/modal/modal',
    'Magento_Customer/js/customer-data'
], function (Component, $, modal, customerData) {
    'use strict';

    var elementId = '#banner_promo_modal';
    var element   = $(elementId);

    return Component.extend({
        /**
         * @returns void
         */
        initialize: function () {
            this._super();

            this.prepareModal();
            this.openModal();
        },

        /**
         * @returns void
         */
        prepareModal: function () {
            var options = {
                type: 'popup',
                modalClass: 'popup-promotional',
                responsive: true,
                innerScroll: false,
                title: false,
                buttons: false
            };

            modal(options, element);

            element.html(this.getConfig('content'));
            element.css('display', 'block');
        },

        /**
         * @returns {boolean}
         */
        openModal: function() {
            if (this.getStorageData('is_opened')) {
                return false;
            }

            this.setStorageData('is_opened', true);

            element.modal('openModal');
        },

        /**
         * @param {string} key
         * @returns {*}
         */
        getConfig: function (key) {
            return window.bannerPromoConfig[key];
        },

        /**
         * @param {string} key
         * @param {*} value
         * @returns void
         */
        setConfig: function (key, value) {
            window.bannerPromoConfig[key] = value;
        },

        /**
         * @param {string} key
         * @returns {*}
         */
        getStorageData: function (key) {
            return customerData.get(this.getConfig('storage_key'))()[key];
        },

        /**
         * @param {string} key
         * @param {*} value
         * @returns void
         */
        setStorageData: function (key, value) {
            var object = {};

            object[key] = value;

            customerData.set(this.getConfig('storage_key'), object);
        }
    });
});
