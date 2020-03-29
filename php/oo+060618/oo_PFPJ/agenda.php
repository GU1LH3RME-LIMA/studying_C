
class agenda
{
    private $evento;
    private $data;
    private $descricao;
 
		public function setEvento( $evento ) {
			$this->evento = $evento;
		}
		public function getEvento() {
			return $this->evento;
		}
 
		public function setData( $data ) {
			$this->data = $data;
		}
		public function getData() {
			return $this->data;
		}
 
		public function setDescricao( $escricao ) {
			$this->escricao = $escricao;
		}
		public function getDescricao() {
			return $this->escricao;
		}
}
