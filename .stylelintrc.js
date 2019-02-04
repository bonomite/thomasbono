module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {

    "indentation": null,
    "no-empty-source": null,
    "max-empty-lines": null,
    "color-hex-length": null,
    "no-eol-whitespace": null,
    "rule-empty-line-before": null,
    "no-descending-specificity": null,
    "at-rule-empty-line-before": null,
    "declaration-empty-line-before": null,
    "selector-pseudo-element-colon-notation": null,
    
    'string-quotes': null,
    
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
