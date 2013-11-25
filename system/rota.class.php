<?php
/**
 * Classe para abstração de rota em PHP
 *
 * @author Alan Freire
 */
class Rota
{
    // Armazena os endereços
    private $endereco = array();
    
    /**
     * Metodo addEndereco
     * Recebe uma url amigável e seu verdadeiro endereço
     * @param type $endereco = url
     * @param type $local = verdadeiro local da url
     */
    public function addEndereco($endereco, $local)
    {
        $this->endereco[$this->encriptyEndereco($endereco)] = $local;
    }
    
    /**
     * Método buscaEndereco
     * Verifica se o endereço existe
     * @param type $endereco = url
     * @return o endereço se existir 
     */
    public function buscaEndereco($endereco)
    {
        if (array_key_exists($this->encriptyEndereco($endereco), $this->endereco))
        {
            return $this->endereco[$this->encriptyEndereco($endereco)];
        }
        else
        {
            return FALSE;
        }
    }
    
    /**
     * Método encriptyEndereco
     * Encripta o endereço para reduzir o tamanho da string
     * Usa a criptografação "adler32"
     * @param type $endereco = url
     * @return o endereco criptografado
     */
    private function encriptyEndereco($endereco)
    {
        return hash('adler32',$endereco);
    }
}

?>
