/**
 * Kirim pesan WhatsApp dari Google Spreadsheet ke OneSender
 * @credit  M Ali <webstoryinc@gmail.com>
 * @version Versi 5.0.0 (7.03.24_17.00)
 * @install https://onesender.net/docs/integration/google-spreadsheet/
 */

function onOpen() {
    var ui = SpreadsheetApp.getUi();

    ui.createMenu('OneSender')
        .addItem('Kirim pesan', 'actionKirimPesan')
        .addSeparator()
        .addItem('Membuat Setting Text', '_action_msg_text')
        .addItem('Membuat Setting Image', '_action_msg_image')
        .addItem('Membuat Setting Document', '_action_msg_document')
        .addToUi();
}

function _action_msg_text() {
    var ui = SpreadsheetApp.getUi();
    var response = ui.alert(
        'Konfirmasi',
        'Membuat template pesan text?',
        ui.ButtonSet.YES_NO);
    if (response == ui.Button.YES) {
        _check_create_setting('text');
    }
}

function _action_msg_image() {
    var ui = SpreadsheetApp.getUi();
    var response = ui.alert(
        'Konfirmasi',
        'Membuat template pesan image?',
        ui.ButtonSet.YES_NO);
    if (response == ui.Button.YES) {
        _check_create_setting('image');
    }
}

function _action_msg_document() {
    var ui = SpreadsheetApp.getUi();
    var response = ui.alert(
        'Konfirmasi',
        'Membuat template pesan document?',
        ui.ButtonSet.YES_NO);
    if (response == ui.Button.YES) {
        _check_create_setting('document');
    }
}


function _check_create_setting(messageType) {
    var ui = SpreadsheetApp.getUi();
    var activeSpreadsheet = SpreadsheetApp.getActiveSpreadsheet();
    var settingSheet = activeSpreadsheet.getSheetByName("onesender_setting");

    if (settingSheet == null) {
        Logger.log("Setting not found");
        settingSheet = activeSpreadsheet.insertSheet();

        _do_create_template(settingSheet, messageType);


    } else {
        var response = ui.alert(
            'Please Confirm',
            'Sheet onesender_setting sudah ada. Apakah Anda Ingin menghapus?',
            ui.ButtonSet.YES_NO);

        if (response == ui.Button.YES) {
            activeSpreadsheet.deleteSheet(settingSheet);
            settingSheet = activeSpreadsheet.insertSheet();

            _do_create_template(settingSheet, messageType);

        } else {
            Logger.log("Don't create setting sheet");
        }
    }
}

function _do_create_template(settingSheet, messageType) {
    settingSheet.setName("onesender_setting");
    if (messageType == 'text') {
        _fill_sheet_setting_text(settingSheet);
        _fill_sheet_sending("Pesan text");
    } else if (messageType == 'image') {
        _fill_sheet_setting_image(settingSheet);
        _fill_sheet_sending("Pesan gambar");
    } else if (messageType == 'document') {
        _fill_sheet_setting_document(settingSheet);
        _fill_sheet_sending("Pesan document");
    } else {
        SpreadsheetApp.getUi().alert('Gagal membuat template. Tipe pesan tidak dikenali');
    }
}

function _fill_sheet_sending(labelType) {
    var ss = SpreadsheetApp.getActiveSpreadsheet();
    let number = ss.getSheets().length + 1,
        name = `${labelType} #${number}`;
    var sendingSheet = ss.getSheetByName(name);

    if (sendingSheet !== null) {
        ss.deleteSheet(sendingSheet);
    }

    sendingSheet = ss.insertSheet();
    sendingSheet.setName(name);

    sendingSheet.getRange("A1").activate();
    sendingSheet.getRange("A1").setValue("Timestamp").setFontWeight("bold");
    sendingSheet.getRange("B1").setValue("Status pengiriman").setFontWeight("bold");
    sendingSheet.getRange("C1").setValue("Nomor WhatsApp").setFontWeight("bold");
    sendingSheet.getRange("D1").setValue("Kolom 1").setFontWeight("bold");
    sendingSheet.getRange("E1").setValue("Kolom 2").setFontWeight("bold");
    sendingSheet.getRange("F1").setValue("Kolom 3").setFontWeight("bold");
    sendingSheet.activate()
    ss.moveActiveSheet(1);
}

function _fill_sheet_setting_text(settingSheet) {
    settingSheet.setColumnWidths(1, 1, 180);

    let row = 1;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting pesan text")
        .setFontSize(18).setFontWeight("bold");
    row++;
    row++;
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting Server").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api URL");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("Contoh: https://sender.api-wa.my.id/api/v1/messages")
        .setFontStyle(true).setFontColor("gray");


    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api Key");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("TEMPLATE PESAN").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Tipe pesan");
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("text");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Isi pesan");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("PENGATURAN LAIN").setFontWeight("bold");
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Record dimulai dari baris ke");
    settingSheet.getRange("B" + row).setValue(2);
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Jumlah pesan tiap request");
    settingSheet.getRange("B" + row).setValue(5);
}

function _fill_sheet_setting_image(settingSheet) {
    settingSheet.setColumnWidths(1, 1, 180);

    let row = 1;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting pesan gambar")
        .setFontSize(18).setFontWeight("bold");
    row++;
    row++;
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting Server").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api URL");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("Contoh: https://sender.api-wa.my.id/api/v1/messages")
        .setFontStyle(true).setFontColor("gray");


    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api Key");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("TEMPLATE PESAN").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Tipe pesan");
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("image");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Isi pesan");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Link gambar");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("Contoh: https://i0.wp.com/artisthue.com/wp-content/uploads/2020/12/Pink-Van-Photographic-Print-by-sisiandseb.jpg")
        .setFontStyle(true).setFontColor("gray");
    row++;
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("PENGATURAN LAIN").setFontWeight("bold");
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Record dimulai dari baris ke");
    settingSheet.getRange("B" + row).setValue(2);
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Jumlah pesan tiap request");
    settingSheet.getRange("B" + row).setValue(5);
}

function _fill_sheet_setting_document(settingSheet) {
    settingSheet.setColumnWidths(1, 1, 180);

    let row = 1;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting pesan document")
        .setFontSize(18).setFontWeight("bold");
    row++;
    row++;
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Setting Server").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api URL");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("Contoh: https://sender.api-wa.my.id/api/v1/messages")
        .setFontStyle(true).setFontColor("gray");


    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Api Key");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("TEMPLATE PESAN").setFontWeight("bold");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Tipe pesan");
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("document");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Isi pesan");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Link document");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");

    row++;
    settingSheet.getRange("B" + row).activate();
    settingSheet.getRange("B" + row).setValue("Contoh: https://i0.wp.com/artisthue.com/wp-content/uploads/2020/12/Pink-Van-Photographic-Print-by-sisiandseb.jpg")
        .setFontStyle(true).setFontColor("gray");


    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Nama file attachment di pesan");
    settingSheet.getRange("B" + row).setValue("document");
    settingSheet.getRange("B" + row).activate().setBackground("#ffcdcd");
    row++;
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("PENGATURAN LAIN").setFontWeight("bold");
    row++;

    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Record dimulai dari baris ke");
    settingSheet.getRange("B" + row).setValue(2);
    row++;
    settingSheet.getRange("A" + row).activate();
    settingSheet.getRange("A" + row).setValue("Jumlah pesan tiap request");
    settingSheet.getRange("B" + row).setValue(5);
}

function actionKirimPesan() {
    Logger.log("Action kirim pesan");

    var ss = SpreadsheetApp.getActiveSpreadsheet();
    var tabSetting = ss.getSheetByName("onesender_setting");
    var tabSending = ss.getActiveSheet();

    if (tabSending.getName() == "onesender_setting") {
        SpreadsheetApp.getUi().alert('Anda membuka tab setting. Menu tidak diproses.');
        return;
    }
    var apiUrl = tabSetting.getRange("B5").getValue().trim();
    var apiKey = tabSetting.getRange("B7").getValue().trim();
    var jumlahPengiriman = tabSetting.getRange("B28").getValue();
    jumlahPengiriman = toAngkaInt(jumlahPengiriman);

    var OneSender = {
        apiUrl: apiUrl,
        apiKey: apiKey,
        kloterPengiriman: jumlahPengiriman,
        cacheMessage: [],
        rowNumber: [],
    };

    /* Cari tipe pesan */
    var messageType = tabSetting.getRange("B10").getValue().trim();

    if (messageType == 'text') {
        actionKirimPesan_Text(OneSender, tabSending, tabSetting)
    } else if (messageType == 'image') {
        actionKirimPesan_Image(OneSender, tabSending, tabSetting)
    } else if (messageType == 'document') {
        actionKirimPesan_Document(OneSender, tabSending, tabSetting)
    } else {
        SpreadsheetApp.getUi().alert('Gagal kirim pesan. Tipe pesan tidak dikenal');
    }
}


function actionKirimPesan_Text(OneSender, tabSending, tabSetting) {
    var messageType = 'text';
    var row_mulai = tabSetting.getRange("B14").getValue();
    row_mulai = toAngkaInt(row_mulai);

    var jumlahPengiriman = tabSetting.getRange("B15").getValue();
    jumlahPengiriman = toAngkaInt(jumlahPengiriman);
    OneSender.kloterPengiriman = jumlahPengiriman;

    var message = tabSetting.getRange("B11").getValue().trim();
    var kolomWhatsApp = 3;
    var messageType = 'text';

    var header = '',
        footer = '',
        actionButtons = [];

    if (message !== "") {
        Logger.log("message found")
        for (row = row_mulai; row <= tabSending.getLastRow(); row++) {
            OneSender.getMessages(messageType, tabSending, row, kolomWhatsApp, header, message, footer, actionButtons);
            OneSender.send(messageType, tabSending, false);
        }

        if (OneSender.cacheMessage.length > 0) {
            OneSender.send(messageType, tabSending, true);
        }
    } else {
        Logger.log("message not found");
        SpreadsheetApp.getUi().alert('Pesan tidak ditemukan');
    }
}

function actionKirimPesan_Image(OneSender, tabSending, tabSetting) {
    var messageType = 'image';
    var row_mulai = tabSetting.getRange("B16").getValue();
    row_mulai = toAngkaInt(row_mulai);

    var jumlahPengiriman = tabSetting.getRange("B17").getValue();
    jumlahPengiriman = toAngkaInt(jumlahPengiriman);
    OneSender.kloterPengiriman = jumlahPengiriman;

    var header = tabSetting.getRange("B12").getValue();
    var message = tabSetting.getRange("B11").getValue();

    header = convertToString(header);
    message = convertToString(message);

    var footer = '';
    var kolomWhatsApp = 3;

    var actionButtons = [];

    if (header !== "" && message !== "") {
        Logger.log("message found")
        for (row = row_mulai; row <= tabSending.getLastRow(); row++) {
            OneSender.getMessages(messageType, tabSending, row, kolomWhatsApp, header, message, footer, actionButtons);
            OneSender.send(messageType, tabSending, false);
        }

        if (OneSender.cacheMessage.length > 0) {
            OneSender.send(messageType, tabSending, true);
        }
    } else {
        Logger.log("message not found");
        SpreadsheetApp.getUi().alert('Pesan tidak ditemukan');
    }
}

function actionKirimPesan_Document(OneSender, tabSending, tabSetting) {
    var messageType = 'document';
    var row_mulai = tabSetting.getRange("B17").getValue();
    row_mulai = toAngkaInt(row_mulai);

    var jumlahPengiriman = tabSetting.getRange("B18").getValue();
    jumlahPengiriman = toAngkaInt(jumlahPengiriman);
    OneSender.kloterPengiriman = jumlahPengiriman;

    var urlFile = tabSetting.getRange("B12").getValue();
    var namaFile = tabSetting.getRange("B14").getValue();
    var message = tabSetting.getRange("B11").getValue();

    urlFile = convertToString(urlFile);
    namaFile = convertToString(namaFile);
    message = convertToString(message);

    var footer = '';
    var kolomWhatsApp = 3;

    var actionButtons = [];

    if (namaFile !== "" && message !== "") {
        Logger.log("message found")
        for (row = row_mulai; row <= tabSending.getLastRow(); row++) {
            OneSender.getMessages(messageType, tabSending, row, kolomWhatsApp, urlFile, message, namaFile, actionButtons);
            OneSender.send(messageType, tabSending, false);
        }

        if (OneSender.cacheMessage.length > 0) {
            OneSender.send(messageType, tabSending, true);
        }
    } else {
        Logger.log("message not found");
        SpreadsheetApp.getUi().alert('Pesan tidak ditemukan');
    }
}


function convertToString(param) {
    if (typeof buttonValue === 'number') {
        return param.toString();
    }

    return param;
}

function toAngkaInt(angka) {
    if (angka == null) return 0;
    angka = angka.length == 0 ? 0 : angka;
    angka = angka.toString();
    angka = angka.match(/\d+/g).join('');
    angka = parseInt(angka, 10)
    return angka
}

/* Args
 sheet = object sheet aktif
 row = number of selected row
 waColumn = nomor kolom whatsapp
 message = Template pesan
*/
Object.defineProperty(Object.prototype, 'getMessages', {
    value: function(messageType, sheet, row, waColumn, header, message, footerMessage, actionButtons) {
        Logger.log("Function kirim pesan whatsapp");

        Logger.log('Cari status di kolom B:' + row);
        
        var status = sheet.getRange("B" + row).getValue();


        if (status !== 'done') {
            sheet.getRange("B" + row).activate();
            sheet.getRange("B" + row).setBackground("white").setFontColor("blue");
            sheet.getRange("B" + row).setValue("diproses");

            var cellsData = [""];

            for (lc = 1; lc <= sheet.getLastColumn(); lc++) {
                cellsData[lc] = sheet.getRange(row, lc).getDisplayValue();
            }

            cellsData.forEach(function(value, key) {
                message = message.replaceAll(`\{column_${key}\}`, value);
            });

            var recipient = cellsData[waColumn];
            var recipientType = recipient.indexOf('g.us') > -1 ? 'group' : 'individual';

            if (recipientType !== 'group') {
                if (typeof recipient == 'number') {
                    recipient = recipient.toString();
                }

                recipient = recipient.match(/\d+/g).join('');

                if (recipient === parseInt(recipient, 10)) {
                    recipient = recipient.toString();
                }


                if (recipientType == 'individual') {
                    recipient = autoPrefixPhone(recipient);
                }
            }


            if (recipient.length > 7) {
                message = message.replaceAll('\t', '');

                if (messageType == 'text') {
                    var msg = tambahkanPesanText(recipientType, recipient, header, message, footerMessage, actionButtons);
                    this.cacheMessage.push(msg);
                    this.rowNumber.push(row);
                } else if (messageType == 'image') {
                    var msg = tambahkanPesanImage(recipientType, recipient, header, message, footerMessage, actionButtons);
                    this.cacheMessage.push(msg);
                    this.rowNumber.push(row);
                } else if (messageType == 'document') {
                    var msg = tambahkanPesanDocument(recipientType, recipient, header, message, footerMessage, actionButtons);
                    this.cacheMessage.push(msg);
                    this.rowNumber.push(row);
                }
            }
        }
    }
});

Object.defineProperty(Object.prototype, 'send', {
    value: function(messageType, sheet, force) {
        // kirim setiap 3 pesan
        Logger.log(`Kirim tiap jika sampai batas ${this.kloterPengiriman}`);
        if (this.cacheMessage.length == this.kloterPengiriman || force == true) {
            Logger.log("Send message to API sender");
            var headers = { "Authorization": "Bearer " + this.apiKey };
            var options = {
                'method': 'POST',
                'contentType': 'application/json',
                'payload': JSON.stringify(this.cacheMessage),
                'headers': headers,
                'muteHttpExceptions': true,
            };

            sendMessages(this.apiUrl, options);

            Logger.log(JSON.stringify(this.cacheMessage));
            Logger.log(JSON.stringify(this.rowNumber));

            this.rowNumber.forEach(function(irow) {
                sheet.getRange("B" + irow).activate();
                sheet.getRange("B" + irow).setBackground("green").setFontColor("white");
                sheet.getRange("B" + irow).setValue("done")
            });

            this.cacheMessage = []; // Bersihkan cache
            this.rowNumber = []; // Bersihkan cache

        }
    }
});

function sendMessages(url, args) {
    var ajax = UrlFetchApp.fetch(url, args);
    Logger.log(ajax.getContentText());
}

function autoPrefixPhone(input) {
    if (input.substring(0, 1) == '0') {
        input = '62' + input.substring(1);
    } else if (input.substring(0, 1) == '8') {
        input = '62' + input;
    }

    return input;
}

function tambahkanPesanText(recipientType, recipient, header, message, footerMessage, actionButtons) {
    return {
        "recipient_type": recipientType,
        "to": recipient,
        "type": "text",
        "text": {
            "body": message
        }
    };
}

function tambahkanPesanImage(recipientType, recipient, header, message, footerMessage, actionButtons) {
    return {
        "recipient_type": recipientType,
        "to": recipient,
        "type": "image",
        "image": {
            "link": header,
            "caption": message,
        }
    };
}

function tambahkanPesanDocument(recipientType, recipient, urlFile, message, namaFile, actionButtons) {
    return {
        "recipient_type": recipientType,
        "to": recipient,
        "type": "document",
        "document": {
            "link": urlFile,
            "filename": namaFile,
            "caption": message,
        }
    };
}

function tambahkanPesanButton(tipe, tujuan, headerLink, pesan, footerMessage, buttons) {
    return {
        "recipient_type": tipe,
        "to": tujuan,
        "type": "interactive_dev",
        "interactive_dev": {
            "header": {
                "type": "image",
                "parameter": {
                    "value": headerLink
                }
            },
            "body": {
                "type": "text",
                "parameter": {
                    "value": pesan
                }
            },
            "footer": {
                "type": "text",
                "parameter": {
                    "value": footerMessage
                }
            },

            "action": {
                "buttons": buttons
            }
        }
    };
}