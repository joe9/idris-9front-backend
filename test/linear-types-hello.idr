module Main

-- got this snippet from https://twitter.com/edwinbrady/status/810622505052467202

%language LinearTypes

data LList : (0 a : Type) -> Type where
  Nil : (0 a : Type) -> LList a
  Cons : (0 a : Type) -> (1 x : a) -> (1 xs : LList a) -> LList a

lit : (0 a : Type) ->
      (0 P : LList a -> Type) ->
      (1 mNil : P Nil) ->
      (mCons : (1 x : a) -> (0 xs : LList a) ->
               (1 p : P xs) -> P (Cons x xs)) ->
      (1 xs : LList a) ->
      P xs
lit P mNil mCons Nil = mNil
lit P mNil mCons (Cons x xs) = mCons x xs (lit P mNil mCons xs)

append : (0 a : Type) ->
         (1 xs : LList a) -> (1 ys : LList a) ->
         LList a
append xs ys = lit (\_ => LList a) ys
                   (\x, _, xs' => Cons x xs') xs

showMyList : Show a => LList a -> String
showMyList Nil = "Nil"
showMyList (Cons x xs) = "Cons " ++ show x  ++ " " ++ showMyList xs

myFun : LList Integer -> Integer -> Integer
myFun Nil j = j
myFun (Cons x xs) j = x + myFun xs j

main : IO ()
main = do
  putStrLn "Hello world"
  putStrLn (show (1000 + 2000))
  putStrLn (show (100012323222232323223232223223232 + 2 + 3))
  putStrLn (showMyList (append (Cons 10 Nil) (Cons 20 (Cons 30 Nil))))
  putStrLn (showMyList (append (Cons 'a' Nil) (Cons 'b' (Cons 'c' Nil))))
  putStrLn (show (myFun (Cons 10 Nil) 20))
