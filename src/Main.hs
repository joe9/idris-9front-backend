module Main where

import Idris.AbsSyntax
import Idris.Core.TT
import Idris.ElabDecls
import Idris.Main
import IRTS.Codegen9FrontC
import IRTS.Compiler
import IRTS.Portable

import Util.System

import Paths_idris_9frontc

import Control.Monad
import System.Environment
import System.Exit
import System.IO

data Opts = Opts { inputs :: [FilePath],
                   output :: FilePath } deriving Show

showUsage = do putStrLn "A code generator which is intended to be called by the compiler, not by a user."
               putStrLn "Usage: idris-codegen-9frontc <ibc-files> [-o <output-file>]"
               putStrLn "The compiler command is: rm hello.ibc; TMPDIR=/tmp/ghc stack exec idris -- --codegenonly --codegen 9frontc hello.idr -o hello.c"
               exitWith ExitSuccess

getOpts :: IO Opts
getOpts = do xs <- getArgs
             return $ process (Opts [] "a.c") xs
  where
    process opts ("-o":o:xs) = process (opts { output = o }) xs
    process opts (x:xs) = process (opts { inputs = x:inputs opts }) xs
    process opts [] = opts

c_main :: Opts -> Idris ()
c_main opts = do -- runIO setupBundledCC
                 elabPrims
                 runIO $ putStrLn "before loadInputs"
                 scds <- allSourceDirs
                 runIO $ putStrLn $ show scds
                 loadInputs (inputs opts) Nothing
--                  showContext
                 runIO $ putStrLn "before elabMain"
                 mainProg <- elabMain
                 runIO (putStrLn (show mainProg))
                 runIO $ putStrLn "before compile"
                 ir <- compile (Via IBCFormat "9frontc") (output opts) (Just mainProg)
                 runIO $ codegen9FrontC ir
                 runIO (withFile "idris-ir.json" WriteMode (flip writePortable ir))
--                  runIO $ traceIO "in Idris compile"
--                  runIO $ traceIO "-----------------------------------------------"
--                  showContext
--                  runIO $ traceIO "-----------------------------------------------"

main :: IO ()
main = do opts <- getOpts
          if (null (inputs opts))
             then showUsage
             else putStrLn (show opts) >> runMain (c_main opts)

-- showContext :: Idris ()
-- showContext
--     = do i <- getIState
--          runIO (traceIO $ "showContext begin -------------------------------------------")
-- --          runIO (putDoc $ prettyIst i t)
-- --          runIO (putDoc $ prettyIst i t)
--          runIO (traceIO $ show $ tt_ctxt i)
--          runIO (traceIO $ "showContext end ---------------------------------------------")
--          return ()

showContext :: Idris ()
showContext
    = do i <- getIState
         runIO (putStrLn $ "showInterfaces begin ------------------------------------")
         runIO (putStrLn $ show (idris_interfaces i))
         runIO (putStrLn $ "showInterfaces end  -------------------------------------")
         runIO (putStrLn $ "showRecords begin ------------------------------------")
         runIO (putStrLn $ show (idris_records i))
         runIO (putStrLn $ "showRecords end  -------------------------------------")
         runIO (putStrLn $ "showDsls begin ------------------------------------")
         runIO (putStrLn $ show (idris_dsls i))
         runIO (putStrLn $ "showDsls end  -------------------------------------")
         runIO (putStrLn $ "showDataTypes begin ------------------------------------")
         runIO (putStrLn $ show (idris_datatypes i))
         runIO (putStrLn $ "showDataTypes end  -------------------------------------")
         runIO (putStrLn $ "showCallGraph begin ------------------------------------")
         runIO (putStrLn $ show (idris_callgraph i))
         runIO (putStrLn $ "showCallGraph end  -------------------------------------")
         runIO (putStrLn $ "showTyinfodata begin ------------------------------------")
         runIO (putStrLn $ show (idris_tyinfodata i))
         runIO (putStrLn $ "showTyinfodata end  -------------------------------------")
         runIO (putStrLn $ "showFninfo begin ------------------------------------")
         runIO (putStrLn $ show (idris_fninfo i))
         runIO (putStrLn $ "showFninfo end  -------------------------------------")
         runIO (putStrLn $ "showName begin ------------------------------------")
         runIO (putStrLn $ show (idris_name i))
         runIO (putStrLn $ "showName end  -------------------------------------")
         return ()
