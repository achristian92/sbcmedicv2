<?php

function getValidateQuantity($decimals = 2) {
    return 'nullable|numeric|regex:/^\d+(\.\d{1,'.$decimals.'})?$/';
}

function getValidateAmount($decimals = 2) {
    return 'nullable|numeric|regex:/^\d+(\.\d{1,'.$decimals.'})?$/';
}
