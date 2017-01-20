<?php
function error($str) { echo "$str\n"; exit(0); }
function idris_writeStr($str) { echo "$str"; }
function idris_readStr() { return fgets(STDIN); }
function mkStr($l) { return array($l); }
function idris_append($l, $r) { return ($l . $r); }

function idris_Prelude_46_Bool_46__38__38_($loc0,$loc1) {
switch($loc0[0]) {
case 0:

return array(0);
break;
case 1:

return idris__123_EVAL0_125_($loc1);
}
}

function idris_Prelude_46_List_46__43__43_($loc0,$loc1,$loc2) {
switch($loc1[0]) {
case 1:
$loc3 = $loc1[1]; $loc4 = $loc1[2]; 
$loc5 = 0;
$loc5 = idris_Prelude_46_List_46__43__43_($loc5,$loc4,$loc2);
return array(1,$loc3,$loc5);
break;
case 0:

return $loc2;
}
}

function idris_Prelude_46_Algebra_46__60__43__62_($loc0,$loc1) {
return $loc1;
}

function idris_Force($loc0,$loc1,$loc2) {
return idris__123_EVAL0_125_($loc2);
}

function idris_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d($loc0) {
$loc1 = 0;
$loc2 = 0;
$loc3 = array(65657);
$loc4 = array(65660);
return idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36__40_a_44__32_b_41__58__33_show_58_0($loc1,$loc2,$loc3,$loc4,$loc0);
}

function idris_PE_95_concatMap_95_8faac41f($loc0,$loc1,$loc2,$loc3) {
$loc4 = 0;
$loc5 = 0;
$loc6 = array(65661,$loc2);
$loc7 = 0;
$loc7 = idris_PE_95_neutral_95_3b7d03e2($loc7);
return idris_PE_95_foldr_95_f16fec77($loc4,$loc5,$loc6,$loc7,$loc3);
}

function idris_PE_95_constructor_32_of_32_Prelude_46_Algebra_46_Monoid_35_Semigroup_32_ty_95_3b7d03e2($loc0,$loc1,$loc2) {
$loc3 = 0;
return idris_Prelude_46_List_46__43__43_($loc3,$loc1,$loc2);
}

function idris_PE_95_constructor_32_of_32_Prelude_46_Applicative_46_Alternative_35_Applicative_32_f_95_db03c9ca($loc0,$loc1) {
$loc2 = array(0);
return array(1,$loc1,$loc2);
}

function idris_PE_95_empty_95_3b7d037f($loc0) {
return array(0);
}

function idris_PE_95_foldr_95_f16fec77($loc0,$loc1,$loc2,$loc3,$loc4) {
$loc5 = 0;
$loc6 = 0;
return idris_Prelude_46_Foldable_46_Prelude_46_List_46__64_Prelude_46_Foldable_46_Foldable_36_List_58__33_foldr_58_0($loc5,$loc6,$loc2,$loc3,$loc4);
}

function idris_PE_95_neutral_95_3b7d03e2($loc0) {
return array(0);
}

function idris_PE_95_print_39__95_4ae87673($loc0,$loc1) {
$loc2 = 0;
$loc3 = 0;
$loc4 = 0;
$loc5 = array(65662,$loc1);
$loc6 = array(65663);
return array(65654,$loc2,$loc3,$loc4,$loc5,$loc6);
}

function idris_PE_95_print_95_3e4b8fc5($loc0) {
$loc1 = 0;
return idris_PE_95_print_39__95_4ae87673($loc1,$loc0);
}

function idris_PE_95_show_95_3e4b8fc5($loc0) {
$loc1 = 0;
$loc2 = array(65650);
return idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36_List_32_a_58__33_show_58_0($loc1,$loc2,$loc0);
}

function idris_assert_95_unreachable() {
return 0;
}

function idris_call_95__95_IO($loc0,$loc1,$loc2) {
$loc3 = 0;
return idris__123_APPLY0_125_($loc2,$loc3);
}

function idris_Prelude_46_Bool_46_ifThenElse($loc0,$loc1,$loc2,$loc3) {
switch($loc1[0]) {
case 0:

return idris__123_EVAL0_125_($loc3);
break;
case 1:

return idris__123_EVAL0_125_($loc2);
}
}

function idris_Prelude_46_Interfaces_46_intToBool($loc0) {
switch($loc0) {
case 0:
return array(0);
break;
default:
return array(1);
}
}

function idris_io_95_bind($loc0,$loc1,$loc2,$loc3,$loc4,$loc5) {
$loc6 = idris__123_io_95_bind2_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5);
$loc7 = idris__123_APPLY0_125_($loc3,$loc5);
return idris__123_APPLY0_125_($loc6,$loc7);
}

function idris_io_95_pure($loc0,$loc1,$loc2,$loc3) {
return $loc2;
}

function idris_Main_46_main() {
$loc0 = 50;
$loc0 = idris_Main_46_pythag($loc0);
return idris_PE_95_print_95_3e4b8fc5($loc0);
}

function idris_mkForeignPrim() {
return 0;
}

function idris_Prelude_46_Bool_46_not($loc0) {
switch($loc0[0]) {
case 0:

return array(1);
break;
case 1:

return array(0);
}
}

function idris_Prelude_46_Show_46_precCon($loc0) {
switch($loc0[0]) {
case 6:

return 6;
break;
case 3:

return 3;
break;
case 2:

return 2;
break;
case 1:

return 1;
break;
case 0:

return 0;
break;
case 5:

return 5;
break;
case 4:
$loc1 = $loc0[1]; 
return 4;
}
}

function idris_Prelude_46_Show_46_primNumShow($loc0,$loc1,$loc2,$loc3) {
$loc4 = idris__123_APPLY0_125_($loc1,$loc3);
$loc5 = array(5);
$loc5 = idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33__62__61__58_0($loc2,$loc5);
switch($loc5[0]) {
case 0:

$loc5 = array(0);

break;
case 1:

$loc5 = idris_Prelude_46_Show_46__123_primNumShow2_125_($loc4,$loc0,$loc1,$loc2,$loc3);

}switch($loc5[0]) {
case 0:

return $loc4;
break;
case 1:

$loc6 = "(";
$loc7 = ")";
$loc7 = idris_append($loc4, $loc7);
return idris_append($loc6, $loc7);
}
}

function idris_prim_95__95_addInt($loc0,$loc1) {
return ($loc0 + $loc1);
}

function idris_prim_95__95_asPtr($loc0) {
return error("OPERATOR LExternal prim__asPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_concat($loc0,$loc1) {
return idris_append($loc0, $loc1);
}

function idris_prim_95__95_eqBigInt($loc0,$loc1) {
return ($loc0 == $loc1);
}

function idris_prim_95__95_eqChar($loc0,$loc1) {
return ($loc0 == $loc1);
}

function idris_prim_95__95_eqInt($loc0,$loc1) {
return ($loc0 == $loc1);
}

function idris_prim_95__95_eqManagedPtr($loc0,$loc1) {
return error("OPERATOR LExternal prim__eqManagedPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_eqPtr($loc0,$loc1) {
return error("OPERATOR LExternal prim__eqPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_eqString($loc0,$loc1) {
return ($loc0 == $loc1);
}

function idris_prim_95__95_mulInt($loc0,$loc1) {
return ($loc0 * $loc1);
}

function idris_prim_95__95_null() {
return error("OPERATOR LExternal prim__null NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peek16($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peek16 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peek32($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peek32 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peek64($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peek64 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peek8($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peek8 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peekDouble($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peekDouble NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peekPtr($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peekPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_peekSingle($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__peekSingle NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_poke16($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__poke16 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_poke32($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__poke32 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_poke64($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__poke64 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_poke8($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__poke8 NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_pokeDouble($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__pokeDouble NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_pokePtr($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__pokePtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_pokeSingle($loc0,$loc1,$loc2,$loc3) {
return error("OPERATOR LExternal prim__pokeSingle NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_ptrOffset($loc0,$loc1) {
return error("OPERATOR LExternal prim__ptrOffset NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_readFile($loc0,$loc1) {
return error("OPERATOR LExternal prim__readFile NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_registerPtr($loc0,$loc1) {
return error("OPERATOR LExternal prim__registerPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_sextInt_95_BigInt($loc0) {
return $loc0;
}

function idris_prim_95__95_sizeofPtr() {
return error("OPERATOR LExternal prim__sizeofPtr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_sltBigInt($loc0,$loc1) {
return ($loc0 < $loc1);
}

function idris_prim_95__95_sltInt($loc0,$loc1) {
return ($loc0 < $loc1);
}

function idris_prim_95__95_stderr() {
return error("OPERATOR LExternal prim__stderr NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_stdin() {
return error("OPERATOR LExternal prim__stdin NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_stdout() {
return error("OPERATOR LExternal prim__stdout NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_strHead($loc0) {
return ord($loc0[0]);
}

function idris_prim_95__95_subInt($loc0,$loc1) {
return ($loc0 - $loc1);
}

function idris_prim_95__95_toStrInt($loc0) {
return "$loc0";
}

function idris_prim_95__95_vm($loc0) {
return error("OPERATOR LExternal prim__vm NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_writeFile($loc0,$loc1,$loc2) {
return error("OPERATOR LExternal prim__writeFile NOT IMPLEMENTED!!!!");
}

function idris_prim_95__95_writeString($loc0,$loc1) {
return idris_writeStr($loc1);
}

function idris_prim_95_io_95_bind($loc0,$loc1,$loc2,$loc3) {
return idris__123_APPLY0_125_($loc3,$loc2);
}

function idris_Prelude_46_Applicative_46_pure($loc0,$loc1,$loc2) {
return idris__123_APPLY0_125_($loc1,$loc2);
}

function idris_Main_46_pythag($loc0) {
$loc1 = 0;
$loc2 = 0;
$loc3 = 1;
$loc3 = idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0($loc3,$loc0);
$loc4 = array(65649);
return idris_Prelude_46_Monad_46_Prelude_46__64_Prelude_46_Monad_46_Monad_36_List_58__33__62__62__61__58_0($loc1,$loc2,$loc3,$loc4);
}

function idris_run_95__95_IO($loc0,$loc1) {
$loc2 = 0;
return idris__123_APPLY0_125_($loc1,$loc2);
}

function idris_Prelude_46_Show_46_show($loc0,$loc1) {
return $loc1;
}

function idris_Prelude_46_Show_46_showParens($loc0,$loc1) {
switch($loc0[0]) {
case 0:

return $loc1;
break;
case 1:

$loc2 = "(";
$loc3 = ")";
$loc3 = idris_append($loc1, $loc3);
return idris_append($loc2, $loc3);
}
}

function idris_Prelude_46_Strings_46_strM($loc0) {
$loc1 = "";
$loc1 = ($loc0 == $loc1);
switch($loc1) {
case 0:
$loc1 = array(0);

break;
default:
$loc1 = array(1);

}switch($loc1[0]) {
case 0:

$loc1 = array(1);

break;
case 1:

$loc1 = array(0);

}$loc2 = array(1);
$loc1 = idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Bool_58__33_decEq_58_0($loc1,$loc2);
switch($loc1[0]) {
case 1:

return array(0);
break;
case 0:

$loc2 = ord($loc0[0]);
return array(1,$loc2);
}
}

function idris_unsafePerformPrimIO() {
return 0;
}

function idris_world($loc0) {
return $loc0;
}

function idris_Prelude_46_Bool_46__124__124_($loc0,$loc1) {
switch($loc0[0]) {
case 0:

return idris__123_EVAL0_125_($loc1);
break;
case 1:

return array(1);
}
}

function idris__123_APPLY0_125_($loc0,$loc1) {
switch($loc0[0]) {
case 65646:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; $loc4 = $loc0[3]; 
return idris_Main_46__123_pythag0_125_($loc2,$loc3,$loc4,$loc1);
break;
case 65647:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; 
return idris_Main_46__123_pythag1_125_($loc2,$loc3,$loc1);
break;
case 65648:
$loc2 = $loc0[1]; 
return idris_Main_46__123_pythag2_125_($loc2,$loc1);
break;
case 65649:

return idris_Main_46__123_pythag3_125_($loc1);
break;
case 65650:

return idris_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d($loc1);
break;
case 65651:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; 
return idris_PE_95_constructor_32_of_32_Prelude_46_Algebra_46_Monoid_35_Semigroup_32_ty_95_3b7d03e2($loc2,$loc3,$loc1);
break;
case 65652:
$loc2 = $loc0[1]; 
return idris_PE_95_constructor_32_of_32_Prelude_46_Applicative_46_Alternative_35_Applicative_32_f_95_db03c9ca($loc2,$loc1);
break;
case 65653:

return idris_Prelude_46_Show_46__123_primNumShow0_125_($loc1);
break;
case 65654:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; $loc4 = $loc0[3]; $loc5 = $loc0[4]; $loc6 = $loc0[5]; 
return idris_io_95_bind($loc2,$loc3,$loc4,$loc5,$loc6,$loc1);
break;
case 65655:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; $loc4 = $loc0[3]; 
return idris_io_95_pure($loc2,$loc3,$loc4,$loc1);
break;
case 65656:

return idris_prim_95__95_toStrInt($loc1);
break;
case 65657:

return idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d0_125_($loc1);
break;
case 65658:

return idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d1_125_($loc1);
break;
case 65659:

return idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d2_125_($loc1);
break;
case 65660:

return idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d3_125_($loc1);
break;
case 65661:
$loc2 = $loc0[1]; 
return idris__123_PE_95_concatMap_95_8faac41f0_125_($loc2,$loc1);
break;
case 65662:
$loc2 = $loc0[1]; 
return idris__123_PE_95_print_39__95_4ae876730_125_($loc2,$loc1);
break;
case 65663:

return idris__123_PE_95_print_39__95_4ae876731_125_($loc1);
break;
case 65664:
$loc2 = $loc0[1]; $loc3 = $loc0[2]; $loc4 = $loc0[3]; $loc5 = $loc0[4]; $loc6 = $loc0[5]; $loc7 = $loc0[6]; 
return idris__123_io_95_bind1_125_($loc2,$loc3,$loc4,$loc5,$loc6,$loc7,$loc1);
break;
case 65665:
$loc2 = $loc0[1]; 
return array(65651,$loc2,$loc1);
break;
case 65667:

return array(65652,$loc1);
break;
default:
return 0;
}
}

function idris__123_APPLY20_125_($loc0,$loc1,$loc2) {
switch($loc0[0]) {
case 65665:
$loc3 = $loc0[1]; 
return idris_PE_95_constructor_32_of_32_Prelude_46_Algebra_46_Monoid_35_Semigroup_32_ty_95_3b7d03e2($loc3,$loc1,$loc2);
break;
case 65667:

return idris_PE_95_constructor_32_of_32_Prelude_46_Applicative_46_Alternative_35_Applicative_32_f_95_db03c9ca($loc1,$loc2);
break;
default:
$loc3 = idris__123_APPLY0_125_($loc0,$loc1);
return idris__123_APPLY0_125_($loc3,$loc2);
}
}

function idris__123_EVAL0_125_($loc0) {
switch($loc0) {
default:
return $loc0;
}
}

function idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d0_125_($loc0) {
$loc1 = 0;
$loc2 = array(65656);
$loc3 = array(0);
return idris_Prelude_46_Show_46_primNumShow($loc1,$loc2,$loc3,$loc0);
}

function idris__123_PE_95_concatMap_95_8faac41f0_125_($loc0,$loc1) {
$loc2 = 0;
$loc3 = 0;
$loc3 = array(65665,$loc3);
$loc2 = idris_Prelude_46_Algebra_46__60__43__62_($loc2,$loc3);
$loc3 = idris__123_APPLY0_125_($loc0,$loc1);
return idris__123_APPLY0_125_($loc2,$loc3);
}

function idris__123_PE_95_print_39__95_4ae876730_125_($loc0,$loc1) {
$loc2 = idris_PE_95_show_95_3e4b8fc5($loc0);
return idris_writeStr($loc2);
}

function idris_Prelude_46_Interfaces_46__123_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33__60__61__58_0_95_lam0_125_($loc0,$loc1) {
$loc2 = ($loc0 == $loc1);
switch($loc2) {
case 0:
return array(0);
break;
default:
return array(1);
}
}

function idris_Prelude_46_Interfaces_46__123_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33__62__61__58_0_95_lam0_125_($loc0,$loc1) {
return idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Eq_36_Prec_58__33__61__61__58_0($loc0,$loc1);
}

function idris__123_io_95_bind0_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5,$loc6) {
return idris__123_APPLY0_125_($loc4,$loc6);
}

function idris_Prelude_46_Show_46__123_primNumShow0_125_($loc0) {
$loc1 = 45;
$loc1 = ($loc0 == $loc1);
switch($loc1) {
case 0:
return array(0);
break;
default:
return array(1);
}
}

function idris_Main_46__123_pythag0_125_($loc0,$loc1,$loc2,$loc3) {
$loc4 = array(0,$loc1,$loc2);
$loc4 = array(0,$loc0,$loc4);
$loc5 = array(0);
return array(1,$loc4,$loc5);
}

function idris__123_runMain0_125_() {
$loc0 = idris_Main_46_main();
$loc1 = 0;
$loc0 = idris__123_APPLY0_125_($loc0,$loc1);
return idris__123_EVAL0_125_($loc0);
}

function idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d1_125_($loc0) {
$loc1 = 0;
$loc2 = array(65656);
$loc3 = array(0);
return idris_Prelude_46_Show_46_primNumShow($loc1,$loc2,$loc3,$loc0);
}

function idris__123_PE_95_print_39__95_4ae876731_125_($loc0) {
$loc1 = 0;
$loc2 = 0;
$loc3 = array(0);
return array(65655,$loc1,$loc2,$loc3);
}

function idris__123_io_95_bind1_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5,$loc6) {
$loc7 = idris__123_io_95_bind0_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5,$loc6);
return idris__123_APPLY0_125_($loc7,$loc5);
}

function idris_Prelude_46_Show_46__123_primNumShow1_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5) {
return array(65653);
}

function idris_Main_46__123_pythag1_125_($loc0,$loc1,$loc2) {
$loc3 = 0;
$loc4 = 0;
$loc5 = ($loc2 * $loc2);
$loc6 = ($loc0 * $loc0);
$loc5 = ($loc5 + $loc6);
$loc6 = ($loc1 * $loc1);
$loc5 = ($loc5 == $loc6);
switch($loc5) {
case 0:
$loc5 = array(0);

break;
default:
$loc5 = array(1);

}switch($loc5[0]) {
case 0:

$loc6 = 0;
$loc5 = idris_PE_95_empty_95_3b7d037f($loc6);

break;
case 1:

$loc6 = 0;
$loc7 = array(65667);
$loc8 = 0;
$loc6 = idris_Prelude_46_Applicative_46_pure($loc6,$loc7,$loc8);
$loc7 = array(0);
$loc5 = idris__123_APPLY0_125_($loc6,$loc7);

}$loc6 = array(65646,$loc2,$loc0,$loc1);
return idris_Prelude_46_Monad_46_Prelude_46__64_Prelude_46_Monad_46_Monad_36_List_58__33__62__62__61__58_0($loc3,$loc4,$loc5,$loc6);
}

function idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d2_125_($loc0) {
$loc1 = 0;
$loc2 = array(65656);
$loc3 = array(0);
return idris_Prelude_46_Show_46_primNumShow($loc1,$loc2,$loc3,$loc0);
}

function idris__123_io_95_bind2_125_($loc0,$loc1,$loc2,$loc3,$loc4,$loc5) {
return array(65664,$loc0,$loc1,$loc2,$loc3,$loc4,$loc5);
}

function idris_Prelude_46_Show_46__123_primNumShow2_125_($loc0,$loc1,$loc2,$loc3,$loc4) {
$loc5 = idris_Prelude_46_Strings_46_strM($loc0);
switch($loc5[0]) {
case 1:
$loc6 = $loc5[1]; 
$loc7 = idris_Prelude_46_Show_46__123_primNumShow1_125_($loc1,$loc2,$loc3,$loc4,$loc0,$loc6);
return idris__123_APPLY0_125_($loc7,$loc6);
break;
case 0:

return array(0);
}
}

function idris_Main_46__123_pythag2_125_($loc0,$loc1) {
$loc2 = 0;
$loc3 = 0;
$loc4 = 1;
$loc4 = idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0($loc4,$loc1);
$loc5 = array(65647,$loc1,$loc0);
return idris_Prelude_46_Monad_46_Prelude_46__64_Prelude_46_Monad_46_Monad_36_List_58__33__62__62__61__58_0($loc2,$loc3,$loc4,$loc5);
}

function idris__123_PE_95__40_a_44__32_b_41__32_implementation_32_of_32_Prelude_46_Show_46_Show_95_25b4465d3_125_($loc0) {
$loc1 = 0;
$loc2 = 0;
$loc3 = array(65658);
$loc4 = array(65659);
return idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36__40_a_44__32_b_41__58__33_show_58_0($loc1,$loc2,$loc3,$loc4,$loc0);
}

function idris_Main_46__123_pythag3_125_($loc0) {
$loc1 = 0;
$loc2 = 0;
$loc3 = 1;
$loc3 = idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0($loc3,$loc0);
$loc4 = array(65648,$loc0);
return idris_Prelude_46_Monad_46_Prelude_46__64_Prelude_46_Monad_46_Monad_36_List_58__33__62__62__61__58_0($loc1,$loc2,$loc3,$loc4);
}

function idris_Prelude_46_List_46_reverse_58_reverse_39__58_0($loc0,$loc1,$loc2) {
switch($loc2[0]) {
case 1:
$loc3 = $loc2[1]; $loc4 = $loc2[2]; 
$loc5 = 0;
$loc6 = array(1,$loc3,$loc1);
return idris_Prelude_46_List_46_reverse_58_reverse_39__58_0($loc5,$loc6,$loc4);
break;
case 0:

return $loc1;
}
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Char_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Int_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Integer_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_ManagedPtr_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Ptr_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_String_58__33_decEq_58_0_58_primitiveNotEq_58_0() {
return 0;
}

function idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_58_0($loc0,$loc1,$loc2,$loc3) {
$loc4 = 0;
$loc5 = 0;
$loc6 = array(0);
$loc7 = ($loc3 - $loc2);
$loc7 = $loc7;
return idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_39__58_0($loc4,$loc5,$loc6,$loc7,$loc3);
}

function idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_39__58_0($loc0,$loc1,$loc2,$loc3,$loc4) {
switch($loc3) {
case 0:
return array(1,$loc4,$loc2);
break;
default:
$loc5 = 1;
$loc5 = ($loc3 - $loc5);
$loc6 = 0;
$loc7 = 0;
$loc8 = array(1,$loc4,$loc2);
$loc9 = 1;
$loc9 = ($loc4 - $loc9);
return idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_39__58_0($loc6,$loc7,$loc8,$loc5,$loc9);
}
}

function idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36_List_32_a_58__33_show_58_0_58_show_39__58_0($loc0,$loc1,$loc2,$loc3,$loc4) {
switch($loc4[0]) {
case 1:
$loc5 = $loc4[1]; $loc6 = $loc4[2]; 
switch($loc6[0]) {
case 0:

$loc7 = 0;
$loc7 = idris_Prelude_46_Show_46_show($loc7,$loc2);
$loc7 = idris__123_APPLY0_125_($loc7,$loc5);
return idris_append($loc3, $loc7);
break;
default:
$loc7 = 0;
$loc8 = 0;
$loc9 = 0;
$loc9 = idris_Prelude_46_Show_46_show($loc9,$loc2);
$loc9 = idris__123_APPLY0_125_($loc9,$loc5);
$loc10 = ", ";
$loc9 = idris_append($loc9, $loc10);
$loc9 = idris_append($loc3, $loc9);
return idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36_List_32_a_58__33_show_58_0_58_show_39__58_0($loc7,$loc8,$loc2,$loc9,$loc6);
}
break;
case 0:

return $loc3;
}
}

function idris_Decidable_46_Equality_46_Decidable_46_Equality_46__64_Decidable_46_Equality_46_DecEq_36_Bool_58__33_decEq_58_0($loc0,$loc1) {
switch($loc1[0]) {
case 0:

switch($loc0[0]) {
case 0:

return array(0);
break;
case 1:

return array(1);
}
break;
case 1:

switch($loc0[0]) {
case 0:

return array(1);
break;
case 1:

return array(0);
}
}
}

function idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0($loc0,$loc1) {
$loc2 = idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33__60__61__58_0($loc0,$loc1);
switch($loc2[0]) {
case 0:

$loc3 = 0;
$loc4 = array(0);
$loc5 = 0;
$loc6 = 0;
$loc5 = idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_58_0($loc5,$loc6,$loc1,$loc0);
return idris_Prelude_46_List_46_reverse_58_reverse_39__58_0($loc3,$loc4,$loc5);
break;
case 1:

$loc3 = 0;
$loc4 = 0;
return idris_Prelude_46_Prelude_46__64_Prelude_46_Enum_36_Int_58__33_enumFromTo_58_0_58_go_58_0($loc3,$loc4,$loc0,$loc1);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Eq_36_Nat_58__33__61__61__58_0($loc0,$loc1) {
switch($loc1) {
case 0:
switch($loc0) {
case 0:
return array(1);
break;
default:
return array(0);
}
break;
default:
$loc2 = 1;
$loc2 = ($loc1 - $loc2);
switch($loc0) {
case 0:
return array(0);
break;
default:
$loc3 = 1;
$loc3 = ($loc0 - $loc3);
return idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Eq_36_Nat_58__33__61__61__58_0($loc3,$loc2);
}
break;
default:
return array(0);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Eq_36_Prec_58__33__61__61__58_0($loc0,$loc1) {
switch($loc1[0]) {
case 4:
$loc2 = $loc1[1]; 
switch($loc0[0]) {
case 4:
$loc3 = $loc0[1]; 
return idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Eq_36_Nat_58__33__61__61__58_0($loc3,$loc2);
break;
default:
$loc3 = idris_Prelude_46_Show_46_precCon($loc0);
$loc4 = idris_Prelude_46_Show_46_precCon($loc1);
$loc3 = ($loc3 == $loc4);
switch($loc3) {
case 0:
return array(0);
break;
default:
return array(1);
}
}
break;
default:
$loc2 = idris_Prelude_46_Show_46_precCon($loc0);
$loc3 = idris_Prelude_46_Show_46_precCon($loc1);
$loc2 = ($loc2 == $loc3);
switch($loc2) {
case 0:
return array(0);
break;
default:
return array(1);
}
}
}

function idris_Prelude_46_Foldable_46_Prelude_46_List_46__64_Prelude_46_Foldable_46_Foldable_36_List_58__33_foldr_58_0($loc0,$loc1,$loc2,$loc3,$loc4) {
switch($loc4[0]) {
case 1:
$loc5 = $loc4[1]; $loc6 = $loc4[2]; 
$loc7 = idris__123_APPLY0_125_($loc2,$loc5);
$loc8 = 0;
$loc9 = 0;
$loc8 = idris_Prelude_46_Foldable_46_Prelude_46_List_46__64_Prelude_46_Foldable_46_Foldable_36_List_58__33_foldr_58_0($loc8,$loc9,$loc2,$loc3,$loc6);
return idris__123_APPLY0_125_($loc7,$loc8);
break;
case 0:

return $loc3;
}
}

function idris_Prelude_46_Monad_46_Prelude_46__64_Prelude_46_Monad_46_Monad_36_List_58__33__62__62__61__58_0($loc0,$loc1,$loc2,$loc3) {
$loc4 = 0;
$loc5 = 0;
return idris_PE_95_concatMap_95_8faac41f($loc4,$loc5,$loc3,$loc2);
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33__60__61__58_0($loc0,$loc1) {
$loc2 = idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33_compare_58_0($loc0,$loc1);
switch($loc2[0]) {
case 0:

$loc2 = array(1);

break;
default:
$loc2 = array(0);

}switch($loc2[0]) {
case 0:

return idris_Prelude_46_Interfaces_46__123_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33__60__61__58_0_95_lam0_125_($loc0,$loc1);
break;
case 1:

return array(1);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33_compare_58_0($loc0,$loc1) {
$loc2 = ($loc0 == $loc1);
switch($loc2) {
case 0:
$loc2 = array(0);

break;
default:
$loc2 = array(1);

}switch($loc2[0]) {
case 0:

$loc3 = ($loc0 < $loc1);
switch($loc3) {
case 0:
$loc3 = array(0);

break;
default:
$loc3 = array(1);

}switch($loc3[0]) {
case 0:

return array(2);
break;
case 1:

return array(0);
}
break;
case 1:

return array(1);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Integer_58__33_compare_58_0($loc0,$loc1) {
$loc2 = ($loc0 == $loc1);
switch($loc2) {
case 0:
$loc2 = array(0);

break;
default:
$loc2 = array(1);

}switch($loc2[0]) {
case 0:

$loc3 = ($loc0 < $loc1);
switch($loc3) {
case 0:
$loc3 = array(0);

break;
default:
$loc3 = array(1);

}switch($loc3[0]) {
case 0:

return array(2);
break;
case 1:

return array(0);
}
break;
case 1:

return array(1);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Ord_36_Nat_58__33_compare_58_0($loc0,$loc1) {
switch($loc1) {
case 0:
switch($loc0) {
case 0:
return array(1);
break;
default:
$loc2 = 1;
$loc2 = ($loc0 - $loc2);
return array(2);
}
break;
default:
$loc2 = 1;
$loc2 = ($loc1 - $loc2);
switch($loc0) {
case 0:
return array(0);
break;
default:
$loc3 = 1;
$loc3 = ($loc0 - $loc3);
return idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Ord_36_Nat_58__33_compare_58_0($loc3,$loc2);
}
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33__62__61__58_0($loc0,$loc1) {
$loc2 = idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33_compare_58_0($loc0,$loc1);
switch($loc2[0]) {
case 2:

$loc2 = array(1);

break;
default:
$loc2 = array(0);

}switch($loc2[0]) {
case 0:

return idris_Prelude_46_Interfaces_46__123_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33__62__61__58_0_95_lam0_125_($loc0,$loc1);
break;
case 1:

return array(1);
}
}

function idris_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33_compare_58_0($loc0,$loc1) {
switch($loc1[0]) {
case 4:
$loc2 = $loc1[1]; 
switch($loc0[0]) {
case 4:
$loc3 = $loc0[1]; 
return idris_Prelude_46_Interfaces_46_Prelude_46_Nat_46__64_Prelude_46_Interfaces_46_Ord_36_Nat_58__33_compare_58_0($loc3,$loc2);
break;
default:
$loc3 = idris_Prelude_46_Show_46_precCon($loc0);
$loc4 = idris_Prelude_46_Show_46_precCon($loc1);
return idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Integer_58__33_compare_58_0($loc3,$loc4);
}
break;
default:
$loc2 = idris_Prelude_46_Show_46_precCon($loc0);
$loc3 = idris_Prelude_46_Show_46_precCon($loc1);
return idris_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Integer_58__33_compare_58_0($loc2,$loc3);
}
}

function idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36__40_a_44__32_b_41__58__33_show_58_0($loc0,$loc1,$loc2,$loc3,$loc4) {
switch($loc4[0]) {
case 0:
$loc5 = $loc4[1]; $loc6 = $loc4[2]; 
$loc7 = "(";
$loc8 = 0;
$loc8 = idris_Prelude_46_Show_46_show($loc8,$loc2);
$loc8 = idris__123_APPLY0_125_($loc8,$loc5);
$loc9 = ", ";
$loc10 = 0;
$loc10 = idris_Prelude_46_Show_46_show($loc10,$loc3);
$loc10 = idris__123_APPLY0_125_($loc10,$loc6);
$loc11 = ")";
$loc10 = idris_append($loc10, $loc11);
$loc9 = idris_append($loc9, $loc10);
$loc8 = idris_append($loc8, $loc9);
return idris_append($loc7, $loc8);
}
}

function idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36_List_32_a_58__33_show_58_0($loc0,$loc1,$loc2) {
$loc3 = "[";
$loc4 = 0;
$loc5 = 0;
$loc6 = "";
$loc4 = idris_Prelude_46_Show_46_Prelude_46_Show_46__64_Prelude_46_Show_46_Show_36_List_32_a_58__33_show_58_0_58_show_39__58_0($loc4,$loc5,$loc1,$loc6,$loc2);
$loc5 = "]";
$loc4 = idris_append($loc4, $loc5);
return idris_append($loc3, $loc4);
}

function idris__95_Prelude_46_Strings_46_strM_95_with_95_22($loc0,$loc1) {
switch($loc1[0]) {
case 1:

return array(0);
break;
case 0:

$loc2 = ord($loc0[0]);
return array(1,$loc2);
}
}

function idris__95_Prelude_46_Interfaces_46_Prelude_46_Show_46__64_Prelude_46_Interfaces_46_Ord_36_Prec_58__33__62__58_0_95_with_95_27($loc0,$loc1,$loc2) {
switch($loc0[0]) {
case 2:

return array(1);
break;
default:
return array(0);
}
}

function idris__95_Prelude_46_Show_46_firstCharIs_95_with_95_44($loc0,$loc1,$loc2) {
switch($loc2[0]) {
case 1:
$loc3 = $loc2[1]; 
return idris__123_APPLY0_125_($loc0,$loc3);
break;
case 0:

return array(0);
}
}

function idris__95_Prelude_46_Interfaces_46_Prelude_46_Interfaces_46__64_Prelude_46_Interfaces_46_Ord_36_Int_58__33__60__58_0_95_with_95_96($loc0,$loc1,$loc2) {
switch($loc0[0]) {
case 0:

return array(1);
break;
default:
return array(0);
}
}

function idris_io_95_bind_95_IO_95__95_idr_95_107_95_34_95_case($loc0,$loc1,$loc2,$loc3,$loc4,$loc5,$loc6,$loc7) {
return idris__123_APPLY0_125_($loc7,$loc5);
}

function idris_Void_95__95__95_casefun_95__95_Void_95__95__95_case() {
return 0;
}

function idris_Void_95_elim() {
return 0;
}


idris__123_runMain0_125_();


