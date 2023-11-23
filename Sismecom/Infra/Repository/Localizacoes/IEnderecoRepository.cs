using Sismecom.Models.Localizacoes;
using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Localizacoes
{
    public interface IEnderecoRepository
    {
        void CadastrarEndereco(Endereco endereco);
        void AtualizarEndereco(Pessoa model);
    }
}
