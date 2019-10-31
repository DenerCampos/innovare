// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('pt', {
  defaultMessage: "Valor inválido.",
  type: {
    email:        "E-mail inválido.",
    url:          "URL inválida.",
    number:       "Somente números.",
    integer:      "Somente números inteiros.",
    digits:       "Somente dígitos.",
    alphanum:     "Campo alfanumérico."
  },
  notblank:       "Preenchimento obrigatório.",
  required:       "Preenchimento obrigatório.",
  pattern:        "Valor inválido.",
  min:            "Valor deve ser maior ou igual a %s.",
  max:            "Valor deve ser menor ou igual a %s.",
  range:          "Valor deve estar entre %s e %s.",
  minlength:      "Valor deveria ter %s ou mais dígitos.",
  maxlength:      "Valor deveria ter %s ou menos dígitos.",
  length:         "Valor deveria ter entre %s e %s dígitos.",
  mincheck:       "Você deve escolher pelo menos %s opções.",
  maxcheck:       "Você deve escolher %s opções ou mais",
  check:          "Você deve escolher entre %s e %s opções.",
  equalto:        "Valores diferentes."
});

Parsley.setLocale('pt');