/*
Navicat MySQL Data Transfer

Source Server         : sysloca
Source Server Version : 50163
Source Host           : mysql12.kinghost.net:3306
Source Database       : tocaria02

Target Server Type    : MYSQL
Target Server Version : 50163
File Encoding         : 65001

Date: 2012-11-20 09:51:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_estoque`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_estoque`;
CREATE TABLE `tbl_estoque` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_estoque
-- ----------------------------
INSERT INTO `tbl_estoque` VALUES ('1', 'Cabo 4x16 mm2 50 metros', null, '16mm2', '12');
INSERT INTO `tbl_estoque` VALUES ('2', 'Cabo 4x16 mm2 40 metros', null, '16mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('3', 'Cabo 4x16 mm2 25 metros', null, '16mm2', '7');
INSERT INTO `tbl_estoque` VALUES ('4', 'Cabo 4x16 mm2 15 metros', null, '16mm2', '8');
INSERT INTO `tbl_estoque` VALUES ('5', 'Cabo 4x16 mm2 10 metros', null, '16mm2', '4');
INSERT INTO `tbl_estoque` VALUES ('6', 'Cabo 4x16 mm2 5 metros', null, '16mm2', '2');
INSERT INTO `tbl_estoque` VALUES ('7', 'Cabo 4x10 mm2 50 metros', null, '10mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('8', 'Cabo 4x10 mm2 25 metros', null, '10mm2', '17');
INSERT INTO `tbl_estoque` VALUES ('9', 'Cabo 4x10 mm2 15 metros', null, '10mm2', '20');
INSERT INTO `tbl_estoque` VALUES ('10', 'Cabo 4x10 mm2 10 metros', null, '10mm2', '9');
INSERT INTO `tbl_estoque` VALUES ('11', 'Cabo 4x10 mm2 5 metros', null, '10mm2', '5');
INSERT INTO `tbl_estoque` VALUES ('12', 'Cabo 4x6 mm2 50 metros', null, '6mm2', '6');
INSERT INTO `tbl_estoque` VALUES ('13', 'Cabo 4x6 mm2 25 metros', null, '6mm2', '16');
INSERT INTO `tbl_estoque` VALUES ('14', 'Cabo 4x6 mm2 15 metros', null, '6mm2', '31');
INSERT INTO `tbl_estoque` VALUES ('15', 'Cabo 4x6 mm2 10 metros', null, '6mm2', '18');
INSERT INTO `tbl_estoque` VALUES ('16', 'Cabo 4x6 mm2  5 metros', null, '6mm2', '13');
INSERT INTO `tbl_estoque` VALUES ('17', 'Cabo 3x6 mm2 25 metros', null, '6mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('18', 'Cabo 3x6 mm2 15 metros', null, '6mm2', '7');
INSERT INTO `tbl_estoque` VALUES ('19', 'Cabo 3x6 mm2 10 metros', null, '6mm2', '4');
INSERT INTO `tbl_estoque` VALUES ('20', 'Cabo 3x6 mm2  5 metros', null, '6mm2', '5');
INSERT INTO `tbl_estoque` VALUES ('21', 'Cabo 2x6 mm2 10 metros', null, '6mm2', '3');
INSERT INTO `tbl_estoque` VALUES ('22', 'Cabo 2x6 mm2 5 metros', null, '6mm2', '2');
INSERT INTO `tbl_estoque` VALUES ('23', 'Cabo 4x4 mm2  50 metros', null, '4mm2', '8');
INSERT INTO `tbl_estoque` VALUES ('24', 'Cabo 4x4 mm2  25 metros', null, '4mm2', '16');
INSERT INTO `tbl_estoque` VALUES ('25', 'Cabo 4x4 mm2  15 metros', null, '4mm2', '10');
INSERT INTO `tbl_estoque` VALUES ('26', 'Cabo 4x4 mm2  10 metros', null, '4mm2', '12');
INSERT INTO `tbl_estoque` VALUES ('27', 'Cabo 4x4 mm2   5 metros', null, '4mm2', '32');
INSERT INTO `tbl_estoque` VALUES ('28', 'Cabo 3x4 mm2  50 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('29', 'Cabo 3x4 mm2  25 metros', null, '4mm2', '7');
INSERT INTO `tbl_estoque` VALUES ('30', 'Cabo 3x4 mm2  15 metros', null, '4mm2', '9');
INSERT INTO `tbl_estoque` VALUES ('31', 'Cabo 3x4 mm2  10 metros', null, '4mm2', '15');
INSERT INTO `tbl_estoque` VALUES ('32', 'Cabo 3x4 mm2   5 metros', null, '4mm2', '16');
INSERT INTO `tbl_estoque` VALUES ('33', 'Cabo 2x4 mm2  50 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('34', 'Cabo 2x4 mm2 25 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('35', 'Cabo 2x4 mm2  15 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque` VALUES ('36', 'Cabo 2x4 mm2   5 metros', null, '4mm2', '8');
INSERT INTO `tbl_estoque` VALUES ('37', 'Cabo 4x2,5 mm2 25 metros', null, '2,5mm2', '6');
INSERT INTO `tbl_estoque` VALUES ('38', 'Cabo 4x2,5 mm2 15 metros', null, '2,5mm2', '3');
INSERT INTO `tbl_estoque` VALUES ('39', 'Cabo 4x2,5 mm2  10 metros', null, '2,5mm2', '7');
INSERT INTO `tbl_estoque` VALUES ('40', 'Cabo 4x2,5 mm2  5 metros', null, '2,5mm2', '9');
INSERT INTO `tbl_estoque` VALUES ('41', 'Cabo 3x2,5 mm2  50 metros', null, '2,5mm2', '12');
INSERT INTO `tbl_estoque` VALUES ('42', 'Cabo 3x2,5 mm2  30 metros', null, '2,5mm2', '7');
INSERT INTO `tbl_estoque` VALUES ('43', 'Cabo 3x2,5 mm2  25 metros', null, '2,5mm2', '57');
INSERT INTO `tbl_estoque` VALUES ('44', 'Cabo 3x2,5 mm2  20 metros', null, '2,5mm2', '17');
INSERT INTO `tbl_estoque` VALUES ('45', 'Cabo 3x2,5 mm2  15 metros', null, '2,5mm2', '48');
INSERT INTO `tbl_estoque` VALUES ('46', 'Cabo 3x2,5 mm2  10 metros', null, '2,5mm2', '55');
INSERT INTO `tbl_estoque` VALUES ('47', 'Cabo 3x2,5 mm2 5 metros', null, '2,5mm2', '98');
INSERT INTO `tbl_estoque` VALUES ('48', 'Cabo 120mm2 25 metros', null, '120mm2', '12');
INSERT INTO `tbl_estoque` VALUES ('49', 'Cabo 70mm2 15 metros', null, '70mm2', '4');
INSERT INTO `tbl_estoque` VALUES ('50', 'Cabo 35mm2 30 metros', null, '35mm2', '4');
INSERT INTO `tbl_estoque` VALUES ('51', 'Cabo 35mm2 5 metros', null, '35mm2', '4');
INSERT INTO `tbl_estoque` VALUES ('52', 'Adesivo de Silicone', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('53', 'Botas ', null, 'Outros', '5');
INSERT INTO `tbl_estoque` VALUES ('54', 'Bomba Sapo', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('55', 'Bomba de Água', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('56', 'Bica', null, 'Outros', '29');
INSERT INTO `tbl_estoque` VALUES ('57', 'Compressor', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('58', 'Carrinho Cestão', null, 'Outros', '8');
INSERT INTO `tbl_estoque` VALUES ('59', 'Carrinho Burro Sem Rabo', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('60', 'Cinto de Segurança', null, 'Outros', '3');
INSERT INTO `tbl_estoque` VALUES ('61', 'Colete Sinalizador', null, 'Outros', '2');
INSERT INTO `tbl_estoque` VALUES ('62', 'Chave Faca', null, 'Outros', '6');
INSERT INTO `tbl_estoque` VALUES ('63', 'Conector de Haste', null, 'Outros', '10');
INSERT INTO `tbl_estoque` VALUES ('64', 'Capacete', null, 'Outros', '7');
INSERT INTO `tbl_estoque` VALUES ('65', 'Chave Bóia', null, 'Outros', '4');
INSERT INTO `tbl_estoque` VALUES ('66', 'Caixa d’ Água 5.000 Litros', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('67', 'Caixa d’ Esgoto', null, 'Outros', '6');
INSERT INTO `tbl_estoque` VALUES ('68', 'Caixa d’ Água 1.000 Litros', null, 'Outros', '10');
INSERT INTO `tbl_estoque` VALUES ('69', 'Comando', null, 'Outros', '3');
INSERT INTO `tbl_estoque` VALUES ('70', 'Disjuntores Diversos', null, 'Outros', '30');
INSERT INTO `tbl_estoque` VALUES ('71', 'Escada Alumínio', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('72', 'Escada Correr Grande', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('73', 'Escada Correr Media', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('74', 'Escada Abrir', null, 'Outros', '2');
INSERT INTO `tbl_estoque` VALUES ('75', 'Fusível NH', null, 'Outros', '13');
INSERT INTO `tbl_estoque` VALUES ('76', 'Granada', null, 'Outros', '4');
INSERT INTO `tbl_estoque` VALUES ('77', 'Haste', null, 'Outros', '31');
INSERT INTO `tbl_estoque` VALUES ('78', 'Lava - Jato', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('79', 'Lâmpada Par 38', null, 'Outros', '20');
INSERT INTO `tbl_estoque` VALUES ('80', 'Lâmpada HQI 400 ', null, 'Outros', '8');
INSERT INTO `tbl_estoque` VALUES ('81', 'Lâmpada Halógena 1000 watts', null, 'Outros', '28');
INSERT INTO `tbl_estoque` VALUES ('82', 'Luvas de Borracha Isolante', null, 'Outros', '2');
INSERT INTO `tbl_estoque` VALUES ('83', 'Lâmpada Mista de 250', null, 'Outros', '6');
INSERT INTO `tbl_estoque` VALUES ('84', 'Lâmpada Mista de 160', null, 'Outros', '14');
INSERT INTO `tbl_estoque` VALUES ('85', 'Mesa Analógica 10 Canais', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('86', 'Maquina de Solda', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('87', 'Maquina de Furar', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('88', 'Parafusadeira', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('89', 'Pia', null, 'Outros', '16');
INSERT INTO `tbl_estoque` VALUES ('90', 'Cuba de Louça', null, 'Outros', '4');
INSERT INTO `tbl_estoque` VALUES ('91', 'Projetor Halógena', null, 'Outros', '28');
INSERT INTO `tbl_estoque` VALUES ('92', 'Projetor HQI Prata', null, 'Outros', '62');
INSERT INTO `tbl_estoque` VALUES ('93', 'Projetor HQI Preto', null, 'Outros', '109');
INSERT INTO `tbl_estoque` VALUES ('94', 'Projetor AR', null, 'Outros', '73');
INSERT INTO `tbl_estoque` VALUES ('95', 'Projetor Par 38', null, 'Outros', '88');
INSERT INTO `tbl_estoque` VALUES ('96', 'Projetor Set Light', null, 'Outros', '28');
INSERT INTO `tbl_estoque` VALUES ('97', 'QG 12 Saídas', null, 'Outros', '3');
INSERT INTO `tbl_estoque` VALUES ('98', 'QG 10 Saídas', null, 'Outros', '3');
INSERT INTO `tbl_estoque` VALUES ('99', 'QG Saída Steck', null, 'Outros', '6');
INSERT INTO `tbl_estoque` VALUES ('100', 'Quadro Tigre', null, 'Outros', '7');
INSERT INTO `tbl_estoque` VALUES ('101', 'Quadro um Disjuntor', null, 'Outros', '10');
INSERT INTO `tbl_estoque` VALUES ('102', 'Quadro Fusível', null, 'Outros', '12');
INSERT INTO `tbl_estoque` VALUES ('103', 'Régua', null, 'Outros', '49');
INSERT INTO `tbl_estoque` VALUES ('104', 'Rabicho', null, 'Outros', '60');
INSERT INTO `tbl_estoque` VALUES ('105', 'Robô', null, 'Outros', '2');
INSERT INTO `tbl_estoque` VALUES ('106', 'Reator', null, 'Outros', '44');
INSERT INTO `tbl_estoque` VALUES ('107', 'Steck 63', null, 'Outros', '10');
INSERT INTO `tbl_estoque` VALUES ('108', 'Steck 32', null, 'Outros', '8');
INSERT INTO `tbl_estoque` VALUES ('109', 'Steck FEM 32', null, 'Outros', '1');
INSERT INTO `tbl_estoque` VALUES ('110', 'Suporte de Pia', null, 'Outros', '8');
INSERT INTO `tbl_estoque` VALUES ('111', 'Tomada Padrão Novo', null, 'Outros', '150');
INSERT INTO `tbl_estoque` VALUES ('112', 'Tomada Padrão Antigo', null, 'Outros', '280');
INSERT INTO `tbl_estoque` VALUES ('113', 'Tomada Ar Condicionado', null, 'Outros', '25');
INSERT INTO `tbl_estoque` VALUES ('114', 'Tomada Pino Macho', null, 'Outros', '90');
INSERT INTO `tbl_estoque` VALUES ('115', 'Transformador', null, 'Outros', '4');
INSERT INTO `tbl_estoque` VALUES ('116', 'Tanque', null, 'Outros', '4');
INSERT INTO `tbl_estoque` VALUES ('117', 'Produto de teste 1', null, 'TESTE', '13');

-- ----------------------------
-- Table structure for `tbl_estoque_bkp`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_estoque_bkp`;
CREATE TABLE `tbl_estoque_bkp` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_estoque_bkp
-- ----------------------------
INSERT INTO `tbl_estoque_bkp` VALUES ('1', 'Cabo 4x16 mm2 50 metros', null, '16mm2', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('2', 'Cabo 4x16 mm2 40 metros', null, '16mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('3', 'Cabo 4x16 mm2 25 metros', null, '16mm2', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('4', 'Cabo 4x16 mm2 15 metros', null, '16mm2', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('5', 'Cabo 4x16 mm2 10 metros', null, '16mm2', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('6', 'Cabo 4x16 mm2 5 metros', null, '16mm2', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('7', 'Cabo 4x10 mm2 50 metros', null, '10mm2', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('8', 'Cabo 4x10 mm2 25 metros', null, '10mm2', '17');
INSERT INTO `tbl_estoque_bkp` VALUES ('9', 'Cabo 4x10 mm2 15 metros', null, '10mm2', '20');
INSERT INTO `tbl_estoque_bkp` VALUES ('10', 'Cabo 4x10 mm2 10 metros', null, '10mm2', '9');
INSERT INTO `tbl_estoque_bkp` VALUES ('11', 'Cabo 4x10 mm2 5 metros', null, '10mm2', '5');
INSERT INTO `tbl_estoque_bkp` VALUES ('12', 'Cabo 4x6 mm2 50 metros', null, '6mm2', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('13', 'Cabo 4x6 mm2 25 metros', null, '6mm2', '16');
INSERT INTO `tbl_estoque_bkp` VALUES ('14', 'Cabo 4x6 mm2 15 metros', null, '6mm2', '31');
INSERT INTO `tbl_estoque_bkp` VALUES ('15', 'Cabo 4x6 mm2 10 metros', null, '6mm2', '18');
INSERT INTO `tbl_estoque_bkp` VALUES ('16', 'Cabo 4x6 mm2  5 metros', null, '6mm2', '13');
INSERT INTO `tbl_estoque_bkp` VALUES ('17', 'Cabo 3x6 mm2 25 metros', null, '6mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('18', 'Cabo 3x6 mm2 15 metros', null, '6mm2', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('19', 'Cabo 3x6 mm2 10 metros', null, '6mm2', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('20', 'Cabo 3x6 mm2  5 metros', null, '6mm2', '5');
INSERT INTO `tbl_estoque_bkp` VALUES ('21', 'Cabo 2x6 mm2 10 metros', null, '6mm2', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('22', 'Cabo 2x6 mm2 5 metros', null, '6mm2', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('23', 'Cabo 4x4 mm2  50 metros', null, '4mm2', '8');
INSERT INTO `tbl_estoque_bkp` VALUES ('24', 'Cabo 4x4 mm2  25 metros', null, '4mm2', '16');
INSERT INTO `tbl_estoque_bkp` VALUES ('25', 'Cabo 4x4 mm2  15 metros', null, '4mm2', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('26', 'Cabo 4x4 mm2  10 metros', null, '4mm2', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('27', 'Cabo 4x4 mm2   5 metros', null, '4mm2', '32');
INSERT INTO `tbl_estoque_bkp` VALUES ('28', 'Cabo 3x4 mm2  50 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('29', 'Cabo 3x4 mm2  25 metros', null, '4mm2', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('30', 'Cabo 3x4 mm2  15 metros', null, '4mm2', '9');
INSERT INTO `tbl_estoque_bkp` VALUES ('31', 'Cabo 3x4 mm2  10 metros', null, '4mm2', '15');
INSERT INTO `tbl_estoque_bkp` VALUES ('32', 'Cabo 3x4 mm2   5 metros', null, '4mm2', '16');
INSERT INTO `tbl_estoque_bkp` VALUES ('33', 'Cabo 2x4 mm2  50 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('34', 'Cabo 2x4 mm2 25 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('35', 'Cabo 2x4 mm2  15 metros', null, '4mm2', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('36', 'Cabo 2x4 mm2   5 metros', null, '4mm2', '8');
INSERT INTO `tbl_estoque_bkp` VALUES ('37', 'Cabo 4x2,5 mm2 25 metros', null, '2,5mm2', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('38', 'Cabo 4x2,5 mm2 15 metros', null, '2,5mm2', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('39', 'Cabo 4x2,5 mm2  10 metros', null, '2,5mm2', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('40', 'Cabo 4x2,5 mm2  5 metros', null, '2,5mm2', '9');
INSERT INTO `tbl_estoque_bkp` VALUES ('41', 'Cabo 3x2,5 mm2  50 metros', null, '2,5mm2', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('42', 'Cabo 3x2,5 mm2  30 metros', null, '2,5mm2', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('43', 'Cabo 3x2,5 mm2  25 metros', null, '2,5mm2', '57');
INSERT INTO `tbl_estoque_bkp` VALUES ('44', 'Cabo 3x2,5 mm2  20 metros', null, '2,5mm2', '17');
INSERT INTO `tbl_estoque_bkp` VALUES ('45', 'Cabo 3x2,5 mm2  15 metros', null, '2,5mm2', '48');
INSERT INTO `tbl_estoque_bkp` VALUES ('46', 'Cabo 3x2,5 mm2  10 metros', null, '2,5mm2', '55');
INSERT INTO `tbl_estoque_bkp` VALUES ('47', 'Cabo 3x2,5 mm2 5 metros', null, '2,5mm2', '98');
INSERT INTO `tbl_estoque_bkp` VALUES ('48', 'Cabo 120mm2 25 metros', null, '120mm2', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('49', 'Cabo 70mm2 15 metros', null, '70mm2', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('50', 'Cabo 35mm2 30 metros', null, '35mm2', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('51', 'Cabo 35mm2 5 metros', null, '35mm2', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('52', 'Adesivo de Silicone', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('53', 'Botas ', null, 'Outros', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('54', 'Bomba Sapo', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('55', 'Bomba de Água', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('56', 'Bica', null, 'Outros', '29');
INSERT INTO `tbl_estoque_bkp` VALUES ('57', 'Compressor', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('58', 'Carrinho Cestão', null, 'Outros', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('59', 'Carrinho Burro Sem Rabo', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('60', 'Cinto de Segurança', null, 'Outros', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('61', 'Colete Sinalizador', null, 'Outros', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('62', 'Chave Faca', null, 'Outros', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('63', 'Conector de Haste', null, 'Outros', '20');
INSERT INTO `tbl_estoque_bkp` VALUES ('64', 'Capacete', null, 'Outros', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('65', 'Chave Bóia', null, 'Outros', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('66', 'Caixa d’ Água 5.000 Litros', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('67', 'Caixa d’ Esgoto', null, 'Outros', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('68', 'Caixa d’ Água 1.000 Litros', null, 'Outros', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('69', 'Comando', null, 'Outros', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('70', 'Disjuntores Diversos', null, 'Outros', '30');
INSERT INTO `tbl_estoque_bkp` VALUES ('71', 'Escada Alumínio', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('72', 'Escada Correr Grande', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('73', 'Escada Correr Media', null, 'Outros', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('74', 'Escada Abrir', null, 'Outros', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('75', 'Fusível NH', null, 'Outros', '23');
INSERT INTO `tbl_estoque_bkp` VALUES ('76', 'Granada', null, 'Outros', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('77', 'Haste', null, 'Outros', '33');
INSERT INTO `tbl_estoque_bkp` VALUES ('78', 'Lava - Jato', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('79', 'Lâmpada Par 38', null, 'Outros', '20');
INSERT INTO `tbl_estoque_bkp` VALUES ('80', 'Lâmpada HQI 400 ', null, 'Outros', '8');
INSERT INTO `tbl_estoque_bkp` VALUES ('81', 'Lâmpada Halógena 1000 watts', null, 'Outros', '28');
INSERT INTO `tbl_estoque_bkp` VALUES ('82', 'Luvas de Borracha Isolante', null, 'Outros', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('83', 'Lâmpada Mista de 250', null, 'Outros', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('84', 'Lâmpada Mista de 160', null, 'Outros', '14');
INSERT INTO `tbl_estoque_bkp` VALUES ('85', 'Mesa Analógica 10 Canais', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('86', 'Maquina de Solda', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('87', 'Maquina de Furar', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('88', 'Parafusadeira', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('89', 'Pia', null, 'Outros', '16');
INSERT INTO `tbl_estoque_bkp` VALUES ('90', 'Cuba de Louça', null, 'Outros', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('91', 'Projetor Halógena', null, 'Outros', '28');
INSERT INTO `tbl_estoque_bkp` VALUES ('92', 'Projetor HQI Prata', null, 'Outros', '62');
INSERT INTO `tbl_estoque_bkp` VALUES ('93', 'Projetor HQI Preto', null, 'Outros', '119');
INSERT INTO `tbl_estoque_bkp` VALUES ('94', 'Projetor AR', null, 'Outros', '73');
INSERT INTO `tbl_estoque_bkp` VALUES ('95', 'Projetor Par 38', null, 'Outros', '88');
INSERT INTO `tbl_estoque_bkp` VALUES ('96', 'Projetor Set Light', null, 'Outros', '28');
INSERT INTO `tbl_estoque_bkp` VALUES ('97', 'QG 12 Saídas', null, 'Outros', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('98', 'QG 10 Saídas', null, 'Outros', '3');
INSERT INTO `tbl_estoque_bkp` VALUES ('99', 'QG Saída Steck', null, 'Outros', '6');
INSERT INTO `tbl_estoque_bkp` VALUES ('100', 'Quadro Tigre', null, 'Outros', '7');
INSERT INTO `tbl_estoque_bkp` VALUES ('101', 'Quadro um Disjuntor', null, 'Outros', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('102', 'Quadro Fusível', null, 'Outros', '12');
INSERT INTO `tbl_estoque_bkp` VALUES ('103', 'Régua', null, 'Outros', '49');
INSERT INTO `tbl_estoque_bkp` VALUES ('104', 'Rabicho', null, 'Outros', '60');
INSERT INTO `tbl_estoque_bkp` VALUES ('105', 'Robô', null, 'Outros', '2');
INSERT INTO `tbl_estoque_bkp` VALUES ('106', 'Reator', null, 'Outros', '44');
INSERT INTO `tbl_estoque_bkp` VALUES ('107', 'Steck 63', null, 'Outros', '10');
INSERT INTO `tbl_estoque_bkp` VALUES ('108', 'Steck 32', null, 'Outros', '8');
INSERT INTO `tbl_estoque_bkp` VALUES ('109', 'Steck FEM 32', null, 'Outros', '1');
INSERT INTO `tbl_estoque_bkp` VALUES ('110', 'Suporte de Pia', null, 'Outros', '8');
INSERT INTO `tbl_estoque_bkp` VALUES ('111', 'Tomada Padrão Novo', null, 'Outros', '150');
INSERT INTO `tbl_estoque_bkp` VALUES ('112', 'Tomada Padrão Antigo', null, 'Outros', '280');
INSERT INTO `tbl_estoque_bkp` VALUES ('113', 'Tomada Ar Condicionado', null, 'Outros', '25');
INSERT INTO `tbl_estoque_bkp` VALUES ('114', 'Tomada Pino Macho', null, 'Outros', '90');
INSERT INTO `tbl_estoque_bkp` VALUES ('115', 'Transformador', null, 'Outros', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('116', 'Tanque', null, 'Outros', '4');
INSERT INTO `tbl_estoque_bkp` VALUES ('117', 'Produto de teste 1', null, 'TESTE', '0');

-- ----------------------------
-- Table structure for `tbl_eventos`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_eventos`;
CREATE TABLE `tbl_eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(100) NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `fechado` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `pronto_saida` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_eventos
-- ----------------------------
INSERT INTO `tbl_eventos` VALUES ('3', 'Evento 3 mais um teste bla bla bla', '2012-08-06 11:15:16', '2012-08-15 12:15:42', 'Outra pessoa', '0', '0', '0');
INSERT INTO `tbl_eventos` VALUES ('4', 'Evento 4 criando um evento sem itens', '2012-12-23 00:00:00', '2012-12-23 00:00:00', 'Operador', '1', '0', '1');
INSERT INTO `tbl_eventos` VALUES ('5', 'Teste evento criado novo teste', '2013-01-01 00:00:00', '2013-01-05 00:00:00', 'Leonardo', '1', '0', '1');

-- ----------------------------
-- Table structure for `tbl_permissoes`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permissoes`;
CREATE TABLE `tbl_permissoes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `permissoes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_permissoes
-- ----------------------------
INSERT INTO `tbl_permissoes` VALUES ('1', 'admin', 'ALL');
INSERT INTO `tbl_permissoes` VALUES ('2', 'operador', 'E;A;1;2;3');

-- ----------------------------
-- Table structure for `tbl_saida`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_saida`;
CREATE TABLE `tbl_saida` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_item_estoque` bigint(20) unsigned DEFAULT NULL,
  `qtd_saida_item` int(11) DEFAULT '0',
  `id_evento` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_itens` (`id_item_estoque`),
  KEY `fk_id_evento` (`id_evento`),
  CONSTRAINT `fk_id_evento` FOREIGN KEY (`id_evento`) REFERENCES `tbl_eventos` (`id`),
  CONSTRAINT `fk_itens` FOREIGN KEY (`id_item_estoque`) REFERENCES `tbl_estoque` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_saida
-- ----------------------------
INSERT INTO `tbl_saida` VALUES ('1', '75', '10', '5');
INSERT INTO `tbl_saida` VALUES ('2', '93', '25', '5');
INSERT INTO `tbl_saida` VALUES ('3', '73', '1', '5');
INSERT INTO `tbl_saida` VALUES ('4', '58', '2', '5');
INSERT INTO `tbl_saida` VALUES ('5', '77', '2', '5');
INSERT INTO `tbl_saida` VALUES ('7', '63', '10', '5');
INSERT INTO `tbl_saida` VALUES ('11', '4', '2', '4');
INSERT INTO `tbl_saida` VALUES ('12', '53', '1', '4');

-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `login` varchar(50) NOT NULL,
  `senha` varchar(11) NOT NULL,
  `acesso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `id_permissao` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_permissoes` (`id_permissao`),
  CONSTRAINT `fk_permissoes` FOREIGN KEY (`id_permissao`) REFERENCES `tbl_permissoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('2', 'Leonardo Tumadjian', 'tumadjian', 'teste1313', '2012-11-16 15:36:55', '1');
INSERT INTO `tbl_users` VALUES ('4', 'Master', 'adm', '123456', '2012-10-31 16:49:31', '1');
INSERT INTO `tbl_users` VALUES ('5', 'Vinícius da Rocha Maciel', 'James.teste', 'S3nh@', '2012-06-28 14:59:40', '1');
INSERT INTO `tbl_users` VALUES ('10', 'Teste Usuário Comum', 'teste', 'teste', '2012-09-20 14:09:47', '2');
