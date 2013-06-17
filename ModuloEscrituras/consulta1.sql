SELECT codusuario,codnotario,numlibro,fechainicio,observaciones 
FROM proyectos 
WHERE codusuario =1101 AND estado =1 LIMIT 0 , 10;
SELECT MAX(cod_sct),num_sct, num_fol FROM escrituras1 WHERE cod_usu=1101