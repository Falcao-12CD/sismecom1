namespace Sismecom.Models.Pessoas
{
    public abstract class Pessoa
    {
      
        public string nome { get; set; } = string.Empty;
        public DateTime data_nascimento { get; set; }
        public string genero { get; set; } = string.Empty;
        public string cep { get; set; } = string.Empty;
        public string cnpj { get; set; } = string.Empty;
        public string endereco { get; set; } = string.Empty;
        public string telefone { get; set; } = string.Empty;
        public string email { get; set; } = string.Empty;
        public string num_matricula { get; set; } = string.Empty;
        public string tipoPessoa { get; set; } = string.Empty;
      
    }
}
