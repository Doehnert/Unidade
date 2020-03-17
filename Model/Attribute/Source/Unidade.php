<?php

namespace Vexpro\Unidade\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Unidade extends AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('AMPOLA'), 'value' => 'AMPOLA'],
                ['label' => __('BALDE'), 'value' => 'BALDE'],
                ['label' => __('BANDEJA'), 'value' => 'BANDEJ'],
                ['label' => __('BARRA'), 'value' => 'BARRA'],
                ['label' => __('BISNAGA'), 'value' => 'BISNAG'],
                ['label' => __('BLOCO'), 'value' => 'BLOCO'],
                ['label' => __('BOBINA'), 'value' => 'BOBINA'],
                ['label' => __('BOMBONA'), 'value' => 'BOMB'],
                ['label' => __('CAPSULA'), 'value' => 'CAPS'],
                ['label' => __('CARTELA'), 'value' => 'CART'],
                ['label' => __('CENTO'), 'value' => 'CENTO'],
                ['label' => __('CONJUNTO'), 'value' => 'CJ'],
                ['label' => __('CENTIMETRO'), 'value' => 'CM'],
                ['label' => __('CENTIMETRO QUADRADO'), 'value' => 'CM2'],
                ['label' => __('CENTIMETRO QUADRADO'), 'value' => 'CM2'],
                ['label' => __('CAIXA'), 'value' => 'CX'],
                ['label' => __('CAIXA COM 2 UNIDADES'), 'value' => 'CX2'],
                ['label' => __('CAIXA COM 3 UNIDADES'), 'value' => 'CX3'],
                ['label' => __('CAIXA COM 5 UNIDADES'), 'value' => 'CX5'],
                ['label' => __('CAIXA COM 10 UNIDADES'), 'value' => 'CX10'],
                ['label' => __('CAIXA COM 15 UNIDADES'), 'value' => 'CX15'],
                ['label' => __('CAIXA COM 20 UNIDADES'), 'value' => 'CX20'],
                ['label' => __('CAIXA COM 25 UNIDADES'), 'value' => 'CX25'],
                ['label' => __('CAIXA COM 50 UNIDADES'), 'value' => 'CX50'],
                ['label' => __('CAIXA COM 100 UNIDADES'), 'value' => 'CX100'],
                ['label' => __('DISPLAY'), 'value' => 'DISP'],
                ['label' => __('DUZIA'), 'value' => 'DUZIA'],
                ['label' => __('EMBALAGEM'), 'value' => 'EMBAL'],
                ['label' => __('FARDO'), 'value' => 'FARDO'],
                ['label' => __('FOLHA'), 'value' => 'FOLHA'],
                ['label' => __('FRASCO'), 'value' => 'FRASCO'],
                ['label' => __('GALÃO'), 'value' => 'GALAO'],
                ['label' => __('GARRAFA'), 'value' => 'GF'],
                ['label' => __('GRAMAS'), 'value' => 'GRAMAS'],
                ['label' => __('JOGO'), 'value' => 'JOGO'],
                ['label' => __('QUILOGRAMA'), 'value' => 'KG'],
                ['label' => __('KIT'), 'value' => 'KIT'],
                ['label' => __('LATA'), 'value' => 'LATA'],
                ['label' => __('LITRO'), 'value' => 'LITRO'],
                ['label' => __('METRO'), 'value' => 'M'],
                ['label' => __('METRO QUADRADO'), 'value' => 'M2'],
                ['label' => __('METRO CÚBICO'), 'value' => 'M3'],
                ['label' => __('MILHEIRO'), 'value' => 'MILHEI'],
                ['label' => __('MILILITRO'), 'value' => 'ML'],
                ['label' => __('MEGAWATT HORA'), 'value' => 'MWH'],
                ['label' => __('PACOTE'), 'value' => 'PACOTE'],
                ['label' => __('PALETE'), 'value' => 'PALETE'],
                ['label' => __('PARES'), 'value' => 'PARES'],
                ['label' => __('PEÇA'), 'value' => 'PC'],
                ['label' => __('POTE'), 'value' => 'POTE'],
                ['label' => __('QUILATE'), 'value' => 'K'],
                ['label' => __('RESMA'), 'value' => 'RESMA'],
                ['label' => __('ROLO'), 'value' => 'ROLO'],
                ['label' => __('SACO'), 'value' => 'SACO'],
                ['label' => __('SACOLA'), 'value' => 'SACOLA'],
                ['label' => __('TAMBOR'), 'value' => 'TAMBOR'],
                ['label' => __('TANQUE'), 'value' => 'TANQUE'],
                ['label' => __('TONELADA'), 'value' => 'TON'],
                ['label' => __('TUBO'), 'value' => 'TUBO'],
                ['label' => __('UNIDADE'), 'value' => 'UNID'],
                ['label' => __('VASILHAME'), 'value' => 'VASIL'],
                ['label' => __('VIDRO'), 'value' => 'VIDRO']
            ];
        }
        return $this->_options;
    }
}